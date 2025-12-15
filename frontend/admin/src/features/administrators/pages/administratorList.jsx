import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import React from 'react';
import { EditOutlined } from '@ant-design/icons';
import Button from '@mui/material/Button';

export default function AdministratorList({
  administrators,
  loading,
  error
}) {

  if (loading) return <p>Cargando...</p>;
  if (error) return <p>Error al cargar administradores</p>;

  return (
    <>
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
                  <Button>
                    <EditOutlined />
                    Editar
                  </Button>
                </TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </>
  );
}
