import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import React, { useState } from 'react';
import { DeleteColumnOutlined, DeleteOutlined, DeleteRowOutlined, EditOutlined, RedoOutlined, StopOutlined } from '@ant-design/icons';
import Button from '@mui/material/Button';
import { useAdministrators } from '../hooks/useAdministrators';
import AdministratorEdit from './administratorEdit';
import IconButton from '@mui/material/IconButton';
import AdministratorDialogDelete from './administratorDialogDelete';
import AdministratorDialogBan from './administratorDialogBan';

export default function AdministratorList({
  administrators,
  loading,
  error,
  onUpdated
}) {
  const [openUpdate, setOpenUpdate] = useState(false);
  const [openDelete, setOpenDelete] = useState(false);
  const [openBan, setOpenBan] = useState(false);
  const [selectedAdmin, setSelectedAdmin] = useState(null);
  const [toRestore, setToRestore] = useState(false);

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

      <AdministratorDialogDelete
          open={openDelete}
          toRestore={toRestore}
          modelTarget={selectedAdmin}
          onClose={() => setOpenDelete(false)}
          onUpdated={() => {
              onUpdated();
              setOpenDelete(false);
              setSelectedAdmin(null);
          }}
      />

      <AdministratorDialogBan
          open={openBan}
          toRestore={toRestore}
          modelTarget={selectedAdmin}
          onClose={() => setOpenBan(false)}
          onUpdated={() => {
              onUpdated();
              setOpenBan(false);
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
                      setOpenDelete(true);
                      setSelectedAdmin(row);
                    }}
                    >
                    <DeleteOutlined />
                  </IconButton>
                  {!row.bloqued ? (
                    <IconButton
                      onClick={()=>{
                        setOpenBan(true);
                        setToRestore(false);
                        setSelectedAdmin(row);
                      }}
                      >
                      <StopOutlined />
                    </IconButton>
                  ): (
                    <IconButton
                      onClick={()=>{
                        setOpenBan(true);
                        setToRestore(true);
                        setSelectedAdmin(row);
                      }}
                      >
                      <RedoOutlined />
                    </IconButton>
                  )}
                </TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </>
  );
}
