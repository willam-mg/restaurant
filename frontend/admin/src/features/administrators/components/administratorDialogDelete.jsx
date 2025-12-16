import { useState } from 'react';
import Button from '@mui/material/Button';
import Dialog from '@mui/material/Dialog';
import DialogTitle from '@mui/material/DialogTitle';
import DialogContent from '@mui/material/DialogContent';
import DialogActions from '@mui/material/DialogActions';
import Alert from '@mui/material/Alert';
import { AdministratorService } from '../services/administrator.service';

export default function AdministratorDialogDelete({
  modelTarget,
  open,
  onClose,
  onDeleted
}) {
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);

  if (!modelTarget) return null;

  const handleDelete = async () => {
    setLoading(true);
    setError(null);

    try {
      await AdministratorService.remove(modelTarget.id);
      onDeleted();
      onClose();
    } catch (err) {
      console.log(err);
      setError(err.response?.data?.message || 'Error al eliminar administrador');
    } finally {
      setLoading(false);
    }
  };

  return (
    <Dialog open={open} onClose={onClose} maxWidth="xs" fullWidth>
      <DialogTitle>Eliminar administrador</DialogTitle>

      <DialogContent>
        {error && (
          <Alert severity="error" sx={{ mb: 2 }}>
            {error}
          </Alert>
        )}

        ¿Estás seguro de eliminar este administrador?
        <br />
        Esta acción no se puede deshacer.
      </DialogContent>

      <DialogActions>
        <Button onClick={onClose} disabled={loading}>
          Cancelar
        </Button>

        <Button
          variant="contained"
          color="error"
          onClick={handleDelete}
          disabled={loading}
        >
          {loading ? 'Eliminando...' : 'Eliminar'}
        </Button>
      </DialogActions>
    </Dialog>
  );
}
