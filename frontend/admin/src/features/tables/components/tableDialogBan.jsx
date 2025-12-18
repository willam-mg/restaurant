import { useState } from 'react';
import Button from '@mui/material/Button';
import Dialog from '@mui/material/Dialog';
import DialogTitle from '@mui/material/DialogTitle';
import DialogContent from '@mui/material/DialogContent';
import DialogActions from '@mui/material/DialogActions';
import Alert from '@mui/material/Alert';
import { TableService } from '../services/table.service';

export default function TableDialogBan({
  modelTarget,
  toRestore,
  open,
  onClose,
  onUpdated
}) {
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);

  if (!modelTarget) return null;

  const handleBlock = async () => {
    setLoading(true);
    setError(null);

    try {
      if (toRestore) {
        await TableService.unBan(modelTarget.id);
      } else {
        await TableService.ban(modelTarget.id);
      }
      onUpdated();
      onClose();
    } catch (err) {
      console.log(err);
      setError(err.response?.data?.message || 'Error al bloquear elemento');
    } finally {
      setLoading(false);
    }
  };

  return (
    <Dialog open={open} onClose={onClose} maxWidth="xs" fullWidth>
      <DialogTitle>{toRestore? 'Desbloquear': 'Bloquear'}</DialogTitle>

      <DialogContent>
        {error && (
          <Alert severity="error" sx={{ mb: 2 }}>
            {error}
          </Alert>
        )}

        ¿Estás seguro de {toRestore? 'desbloquear': 'bloquear'} este elemento?
      </DialogContent>

      <DialogActions>
        <Button onClick={onClose} disabled={loading}>
          Cancelar
        </Button>

        <Button
          variant="contained"
          color={toRestore ? 'success' : 'primary'}
          onClick={handleBlock}
          disabled={loading}
        >
          {loading
            ? (toRestore ? 'Desbloqueando...' : 'Bloqueando...')
            : (toRestore ? 'Desbloquear' : 'Bloquear')}
        </Button>
      </DialogActions>
    </Dialog>
  );
}
