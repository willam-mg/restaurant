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
                    nombre_completo: modelTarget.nombre_completo || '',
                    email: modelTarget.email || '',
                    password: '',
                }}
                validationSchema={Yup.object().shape({
                    nombre_completo: Yup.string()
                        .max(255)
                        .required('Es requerido'),
                    email: Yup.string()
                        .email('Debe ser un email')
                        .max(255)
                        .required('Es requerido'),
                    password: Yup.string()
                        .max(10, 'Máximo 10 caracteres')
                })}
                onSubmit={async (values, { setErrors, setSubmitting }) => {
                    try {
                        const payload = { ...values };

                        // si no cambia password, no se envía
                        if (!payload.password) {
                            delete payload.password;
                        }

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
                                            name="nombre_completo"
                                            value={values.nombre_completo}
                                            onBlur={handleBlur}
                                            onChange={handleChange}
                                            fullWidth
                                            error={Boolean(touched.nombre_completo && errors.nombre_completo)}
                                        />
                                        {touched.nombre_completo && errors.nombre_completo && (
                                            <FormHelperText error>
                                                {errors.nombre_completo}
                                            </FormHelperText>
                                        )}
                                    </Stack>
                                </Grid>

                                <Grid size={12}>
                                    <Stack gap={1}>
                                        <InputLabel>Email</InputLabel>
                                        <OutlinedInput
                                            name="email"
                                            type="email"
                                            value={values.email}
                                            onBlur={handleBlur}
                                            onChange={handleChange}
                                            fullWidth
                                            error={Boolean(touched.email && errors.email)}
                                        />
                                        {touched.email && errors.email && (
                                            <FormHelperText error>
                                                {errors.email}
                                            </FormHelperText>
                                        )}
                                    </Stack>
                                </Grid>

                                <Grid size={12}>
                                    <Stack gap={1}>
                                        <InputLabel>Password (opcional)</InputLabel>
                                        <OutlinedInput
                                            name="password"
                                            type="password"
                                            value={values.password}
                                            onBlur={handleBlur}
                                            onChange={handleChange}
                                            fullWidth
                                            placeholder="Dejar vacío para no cambiar"
                                            error={Boolean(touched.password && errors.password)}
                                        />
                                        {touched.password && errors.password && (
                                            <FormHelperText error>
                                                {errors.password}
                                            </FormHelperText>
                                        )}
                                    </Stack>
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
