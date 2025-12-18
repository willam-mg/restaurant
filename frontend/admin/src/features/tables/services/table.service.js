import axios from '@/utils/axios';

export const TableService = {
  async list(params = {}) {
    const response = await axios.get('/tables', {params});
    console.log('response from axios', response);
    return response.data;
  },

  async getById(id) {
    const response = await axios.get(`/tables/${id}`);
    return response.data;
  },

  async create(data) {
    const response = await axios.post('/tables', data);
    return response.data;
  },

  async update(id, data) {
    const response = await axios.put(`/tables/${id}`, data);
    return response.data;
  },

  async remove(id) {
    const response = await axios.delete(`/tables/${id}`);
    return response.data.message;
  },

  async restore(id) {
    const response = await axios.post(`/tables/${id}/restore`);
    return response.data;
  }
};
