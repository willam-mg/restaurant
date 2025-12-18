import React, { useEffect, useState } from 'react';
import { PlusOutlined } from '@ant-design/icons';
import Button from '@mui/material/Button';
import TableCreate from '../components/tableCreate';
import TableList from '../components/tableList';
import { useTables } from '../hooks/useTables';
import Grid from '@mui/material/Grid';

export default function TablePage() {
    const [openCreate, setOpenCreate] = useState(false);
    const {tables,loading,error,load} = useTables();  

    const handleRefreshData = () => {
        load();
    };

    useEffect(() => {
        load();
    }, [load]);

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
                        Nueva mesa
                    </Button>
                </Grid>
            </Grid>

            <TableCreate
                open={openCreate}
                onClose={() => setOpenCreate(false)}
                onCreated = {handleRefreshData}
            />

            <TableList
                tables = {tables}
                loading = {loading}
                error = {error}
                onUpdated={handleRefreshData}
            />
        </>
    );
}
