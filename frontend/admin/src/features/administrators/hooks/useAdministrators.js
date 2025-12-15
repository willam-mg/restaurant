import { useState, useCallback } from 'react';
import { AdministratorService } from '../services/administrator.service';
import {Administrator} from '../models/Administrator';

export function useAdministrators() {
  const [administrators, setAdministrators] = useState([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);
  const [meta, setMeta] = useState(null);

  const load = useCallback(async (params = {}) => {
    try {
        setLoading(true);
        const response = await AdministratorService.list(params);
        const data = response.data.map(item => new Administrator(item));
        setAdministrators(data);
        setMeta(response.meta);
    } catch (err) {
        setError(err);
    } finally {
        setLoading(false);
    }
  }, []);

  return {
    administrators,
    loading,
    error,
    load
  };
}
