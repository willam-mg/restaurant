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
import { AdministratorService } from '../services/administrator.service';

const BootstrapDialog = styled(Dialog)(({ theme }) => ({
  '& .MuiDialogContent-root': {
    padding: theme.spacing(2),
  },
  '& .MuiDialogActions-root': {
    padding: theme.spacing(1),
  },
}));

export default function AdministratorCreate({ open, onClose, onCreated }) {
  return (
    <BootstrapDialog
        open={open}
        onClose={onClose}
        aria-labelledby="customized-dialog-title"
        fullWidth
        maxWidth="xs"
    >
        <DialogTitle sx={{ m: 0, p: 2 }}>
            Crear Administrador
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
                nombre_completo: '',
                email: '',
                password: '',
                submit: null
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
                    .required('Password es requerido')
                    .test('no-leading-trailing-whitespace', 'Password cannot start or end with spaces', (value) => value === value.trim())
                    .max(10, 'Password must be less than 10 characters')
            })}
            onSubmit={async (values, { setErrors, setSubmitting }) => {
                try {
                    await AdministratorService.create(values);
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
                                    <InputLabel htmlFor="email-nombre_completo">Nombre completo</InputLabel>
                                    <OutlinedInput
                                        id="nombre_completo"
                                        type="nombre_completo"
                                        value={values.nombre_completo}
                                        name="nombre_completo"
                                        onBlur={handleBlur}
                                        onChange={handleChange}
                                        placeholder="Nombre completo"
                                        fullWidth
                                        error={Boolean(touched.nombre_completo && errors.nombre_completo)}
                                    />
                                </Stack>
                                {touched.nombre_completo && errors.nombre_completo && (
                                    <FormHelperText error id="standard-weight-helper-text-nombre_completo">
                                        {errors.nombre_completo}
                                    </FormHelperText>
                                )}
                            </Grid>
                            <Grid size={12}>
                                <Stack sx={{ gap: 1 }}>
                                    <InputLabel htmlFor="email-login">Email</InputLabel>
                                    <OutlinedInput
                                        id="email-login"
                                        type="email"
                                        value={values.email}
                                        name="email"
                                        onBlur={handleBlur}
                                        onChange={handleChange}
                                        placeholder="juan@correo.com"
                                        fullWidth
                                        error={Boolean(touched.email && errors.email)}
                                    />
                                </Stack>
                                {touched.email && errors.email && (
                                    <FormHelperText error id="standard-weight-helper-text-email">
                                        {errors.email}
                                    </FormHelperText>
                                )}
                            </Grid>
                             <Grid size={12}>
                                <Stack sx={{ gap: 1 }}>
                                    <InputLabel htmlFor="email-login">Password</InputLabel>
                                    <OutlinedInput
                                        id="password"
                                        type="password"
                                        value={values.password}
                                        name="password"
                                        onBlur={handleBlur}
                                        onChange={handleChange}
                                        placeholder="Nombre completo"
                                        fullWidth
                                        error={Boolean(touched.password && errors.password)}
                                    />
                                </Stack>
                                {touched.password && errors.password && (
                                    <FormHelperText error id="standard-weight-helper-text-password">
                                        {errors.password}
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
