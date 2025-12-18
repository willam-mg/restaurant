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
import MenuItem from '@mui/material/MenuItem';
import Select from '@mui/material/Select';

const BootstrapDialog = styled(Dialog)(({ theme }) => ({
  '& .MuiDialogContent-root': {
    padding: theme.spacing(2),
  },
  '& .MuiDialogActions-root': {
    padding: theme.spacing(1),
  },
}));

export default function TableCreate({ open, onClose, onCreated }) {
  return (
    <BootstrapDialog
        open={open}
        onClose={onClose}
        aria-labelledby="customized-dialog-title"
        fullWidth
        maxWidth="xs"
    >
        <DialogTitle sx={{ m: 0, p: 2 }}>
            Crear Mesa
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
            initialValues={{
                name: '',
                status: 'free',
            }}
            validationSchema={Yup.object().shape({
                name: Yup.string()
                    .max(255)
                    .required('Es requerido'),
                status: Yup.string()
                    .required('El estado es requerido')
            })}
            onSubmit={async (values, { setErrors, setSubmitting }) => {
                try {
                    await TableService.create(values);
                    onCreated();
                    onClose();
                } catch (error) {
                    setErrors({
                        submit: error.response?.data?.message || 'Error al iniciar sesión'
                    });
                } finally {
                    setSubmitting(false);
                }
            }}
        >
            {({ errors, handleBlur, handleChange, touched, values, handleSubmit, isSubmitting }) => (
                <form noValidate onSubmit={handleSubmit}>
                    <DialogContent dividers>
                        <Grid container spacing={3}>
                            <Grid size={12}>
                                <Stack sx={{ gap: 1 }}>
                                    <InputLabel htmlFor="name">Nombre completo</InputLabel>
                                    <OutlinedInput
                                        id="name"
                                        type="name"
                                        value={values.name}
                                        name="name"
                                        onBlur={handleBlur}
                                        onChange={handleChange}
                                        placeholder="Nombre completo"
                                        fullWidth
                                        error={Boolean(touched.name && errors.name)}
                                    />
                                </Stack>
                                {touched.name && errors.name && (
                                    <FormHelperText error id="standard-weight-helper-text-name">
                                        {errors.name}
                                    </FormHelperText>
                                )}
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
                        <Button variant="outlined" onClick={onClose}>
                            Cancelar
                        </Button>
                        <Button 
                            variant="contained"
                            type='submit'
                            disabled={isSubmitting}>
                            {isSubmitting? 'Guardando': 'Guardar'}
                        </Button>
                    </DialogActions>
                </form>
            )}
        </Formik>
    </BootstrapDialog>
  );
}
