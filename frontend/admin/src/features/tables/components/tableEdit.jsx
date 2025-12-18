import * as React from 'react';
import Button from '@mui/material/Button';
import { styled } from '@mui/material/styles';
import Dialog from '@mui/material/Dialog';
import DialogTitle from '@mui/material/DialogTitle';
import DialogContent from '@mui/material/DialogContent';
import DialogActions from '@mui/material/DialogActions';
import IconButton from '@mui/material/IconButton';
import { CloseOutlined } from '@ant-design/icons';
import { Formik } from 'formik';
import * as Yup from 'yup';
import Stack from '@mui/material/Stack';
import InputLabel from '@mui/material/InputLabel';
import OutlinedInput from '@mui/material/OutlinedInput';
import { Grid } from '@mui/system';
import FormHelperText from '@mui/material/FormHelperText';
import { TableService } from '../services/table.service';
import Select from '@mui/material/Select';
import MenuItem from '@mui/material/MenuItem';

const BootstrapDialog = styled(Dialog)(({ theme }) => ({
  '& .MuiDialogContent-root': {
    padding: theme.spacing(2),
  },
  '& .MuiDialogActions-root': {
    padding: theme.spacing(1),
  },
}));

export default function TableEdit({ modelTarget, open, onClose, onUpdated }) {
    if (!modelTarget) return null;

    return (
        <BootstrapDialog
            open={open}
            onClose={onClose}
            fullWidth
            maxWidth="xs"
        >
            <DialogTitle sx={{ m: 0, p: 2 }}>
                Editar Mesa
            </DialogTitle>

            <IconButton
                aria-label="close"
                onClick={onClose}
                sx={(theme) => ({
                    position: 'absolute',
                    right: 8,
                    top: 8,
                    color: theme.palette.grey[500],
                })}
            >
                <CloseOutlined />
            </IconButton>

            <Formik
                enableReinitialize
                initialValues={{
                    name: modelTarget.name || '',
                    status: modelTarget.status || '',
                }}
                validationSchema={Yup.object().shape({
                    name: Yup.string()
                        .max(255)
                        .required('Es requerido'),
                    status: Yup.string()
                        .max(255)
                        .required('Es requerido'),
                })}
                onSubmit={async (values, { setErrors, setSubmitting }) => {
                    try {
                        const payload = { ...values };

                        await TableService.update(modelTarget.id, payload);
                        onUpdated();
                        onClose();
                    } catch (error) {
                        setErrors({
                            submit: error.response?.data?.message || 'Error al actualizar'
                        });
                    } finally {
                        setSubmitting(false);
                    }
                }}
            >
                {({
                    errors,
                    handleBlur,
                    handleChange,
                    touched,
                    values,
                    handleSubmit,
                    isSubmitting
                }) => (
                    <form noValidate onSubmit={handleSubmit}>
                        <DialogContent dividers>
                            <Grid container spacing={3}>
                                <Grid size={12}>
                                    <Stack gap={1}>
                                        <InputLabel>Nombre completo</InputLabel>
                                        <OutlinedInput
                                            type='number'
                                            name="name"
                                            value={values.name}
                                            onBlur={handleBlur}
                                            onChange={handleChange}
                                            fullWidth
                                            error={Boolean(touched.name && errors.name)}
                                        />
                                        {touched.name && errors.name && (
                                            <FormHelperText error>
                                                {errors.name}
                                            </FormHelperText>
                                        )}
                                    </Stack>
                                </Grid>

                                <Grid size={12}>
                                    <Stack sx={{ gap: 1 }}>
                                        <InputLabel htmlFor="status-select">Estado</InputLabel>
                                        <Select
                                            id="status-select"
                                            name="status"
                                            value={values.status}
                                            onChange={handleChange}
                                            onBlur={handleBlur}
                                            fullWidth
                                            error={Boolean(touched.status && errors.status)}
                                            displayEmpty
                                        >
                                            <MenuItem value="" disabled>
                                                Seleccione un estado
                                            </MenuItem>
                                            <MenuItem value="free">Disponible</MenuItem>
                                            <MenuItem value="occupied">Ocupada</MenuItem>
                                            <MenuItem value="reserved">Reservada</MenuItem>
                                        </Select>
                                    </Stack>
                                    {touched.status && errors.status && (
                                        <FormHelperText error id="standard-weight-helper-text-status">
                                            {errors.status}
                                        </FormHelperText>
                                    )}
                                </Grid>
                            </Grid>
                        </DialogContent>

                        <DialogActions>
                            <Button
                                variant="outlined"
                                onClick={onClose}
                                disabled={isSubmitting}
                            >
                                Cancelar
                            </Button>

                            <Button
                                variant="contained"
                                type="submit"
                                disabled={isSubmitting}
                            >
                                {isSubmitting ? 'Guardando...' : 'Actualizar'}
                            </Button>
                        </DialogActions>
                    </form>
                )}
            </Formik>
        </BootstrapDialog>
    );
}
