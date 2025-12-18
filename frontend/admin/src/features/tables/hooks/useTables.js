import { useState, useCallback } from 'react';
import { TableService } from '../services/table.service';
import {Table} from '../models/Table';

export function useTables() {
  const [tables, setTables] = useState([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);
  const [meta, setMeta] = useState(null);

  const load = useCallback(async (params = {}) => {
    try {
        setLoading(true);
        const response = await TableService.list(params);
        const data = response.data.map(item => new Table(item));
        setTables(data);
        setMeta(response.meta);
    } catch (err) {
        setError(err);
    } finally {
        setLoading(false);
    }
  }, []);

  return {
    tables,
    loading,
    error,
    load
  };
}
