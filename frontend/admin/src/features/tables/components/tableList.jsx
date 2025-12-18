import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import React, { useState } from 'react';
import { DeleteOutlined, EditOutlined, RedoOutlined, StopOutlined } from '@ant-design/icons';
import TableEdit from './tableEdit';
import IconButton from '@mui/material/IconButton';
import TableDialogDelete from './tableDialogDelete';
import TableDialogBan from './tableDialogBan';

export default function TableList({
  tables,
  onUpdated
}) {
  const [openUpdate, setOpenUpdate] = useState(false);
  const [openDelete, setOpenDelete] = useState(false);
  const [openBan, setOpenBan] = useState(false);
  const [selectedAdmin, setSelectedAdmin] = useState(null);
  const [toRestore, setToRestore] = useState(false);

  return (
    <>
      <TableEdit
          open={openUpdate}
          modelTarget={selectedAdmin}
          onClose={() => setOpenUpdate(false)}
          onUpdated={() => {
              onUpdated();
              setOpenUpdate(false);
              setSelectedAdmin(null);
          }}
      />

      <TableDialogDelete
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

      <TableContainer component={Paper}>
        <Table sx={{ minWidth: 650 }} aria-label="simple table">
          <TableHead>
            <TableRow>
              <TableCell>Numero</TableCell>
              <TableCell>Estado</TableCell>
              <TableCell>Acciones</TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {tables.map((row) => (
              <TableRow
                key={row.id}
                sx={{ '&:last-child td, &:last-child th': { border: 0 } }}
              >
                <TableCell component="th" scope="row">
                  {row.name}
                </TableCell>
                <TableCell align="left">
                  {row.status}
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
                </TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </>
  );
}
