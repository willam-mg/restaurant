import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import React, { useState } from 'react';
import { DeleteColumnOutlined, DeleteOutlined, DeleteRowOutlined, EditOutlined } from '@ant-design/icons';
import Button from '@mui/material/Button';
import { useAdministrators } from '../hooks/useAdministrators';
import AdministratorEdit from './administratorEdit';
import IconButton from '@mui/material/IconButton';

export default function AdministratorList({
  administrators,
  loading,
  error,
  onUpdated
}) {
  const [openUpdate, setOpenUpdate] = useState(false);
  const [selectedAdmin, setSelectedAdmin] = useState(null);

  if (loading) return <p>Cargando...</p>;
  if (error) return <p>Error al cargar administradores</p>;

  return (
    <>
      <AdministratorEdit
          open={openUpdate}
          modelTarget={selectedAdmin}
          onClose={() => setOpenUpdate(false)}
          onUpdated={() => {
              onUpdated();
              setOpenUpdate(false);
              setSelectedAdmin(null);
          }}
      />

      <TableContainer component={Paper}>
        <Table sx={{ minWidth: 650 }} aria-label="simple table">
          <TableHead>
            <TableRow>
              <TableCell>Nombre</TableCell>
              <TableCell>Email</TableCell>
              <TableCell>Acciones</TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {administrators.map((row) => (
              <TableRow
                key={row.id}
                sx={{ '&:last-child td, &:last-child th': { border: 0 } }}
              >
                <TableCell component="th" scope="row">
                  {row.nombre_completo}
                </TableCell>
                <TableCell align="left">
                  {row.email}
                </TableCell>
                <TableCell 
                  align="left"
                  starticon={<pencilIcon/>}
                  >
                  <IconButton
                    onClick={()=>{
                      setOpenUpdate(true);
                      setSelectedAdmin(row);
                    }}
                    >
                    <EditOutlined />
                  </IconButton>
                  <IconButton
                    onClick={()=>{
                      setOpenUpdate(true);
                      setSelectedAdmin(row);
                    }}
                    >
                    <DeleteOutlined />
                  </IconButton>
                </TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </>
  );
}
