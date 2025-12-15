import React, { useEffect, useState } from 'react';
import { PlusOutlined } from '@ant-design/icons';
import Button from '@mui/material/Button';
import AdministratorCreate from './administratorCreate';
import AdministratorList from './administratorList';
import { useAdministrators } from '../hooks/useAdministrators';
import Grid from '@mui/material/Grid';

export default function AdministratorPage() {
    const [openCreate, setOpenCreate] = useState(false);
    const {administrators,loading,error,load} = useAdministrators();  

    useEffect(() => {
        load();
    }, [load]);

    const handleRefreshData = () => {
        load();
    };

    return (
        <>
            <Grid container spacing={2} alignItems="center">
                <Grid size={{ xs:12, md:4 }}>
                </Grid>
                <Grid size={{ xs:12, md:4 }}>
                </Grid>
                <Grid 
                    size={{ xs:12, md:4 }} 
                    sx={{ 
                        display: 'flex', 
                        justifyContent: { 
                            xs: 'flex-start', 
                            md: 'flex-end' 
                        } 
                    }}
                >
                    <Button
                        variant="contained"
                        startIcon={<PlusOutlined />}
                        onClick={() => setOpenCreate(true)}
                        sx={{ 
                            mb: 2,
                        }}
                    >
                        Nuevo Administrador
                    </Button>
                </Grid>
            </Grid>

            <AdministratorCreate
                open={openCreate}
                onClose={() => setOpenCreate(false)}
                onCreated = {handleRefreshData}
            />

            <AdministratorList
                administrators = {administrators}
                loading = {loading}
                error = {error}
                onUpdated={handleRefreshData}
            />
        </>
    );
}
