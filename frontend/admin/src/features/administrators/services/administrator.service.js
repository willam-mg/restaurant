import axios from '@/utils/axios';

export const AdministratorService = {
  async list(params = {}) {
    const response = await axios.get('/administrators', {params});
    console.log('response from axios', response);
    return response.data;
  },

  async getById(id) {
    const response = await axios.get(`/administrators/${id}`);
    return response.data;
  },

  async create(data) {
    const response = await axios.post('/administrators', data);
    return response.data;
  },

  async update(id, data) {
    const response = await axios.put(`/administrators/${id}`, data);
    return response.data;
  },

  async remove(id) {
    const response = await axios.delete(`/administrators/${id}`);
    return response.data.message;
  },

  async ban(id) {
    const response = await axios.delete(`/administrators/${id}/ban`);
    return response.data.message;
  },

  async restore(id) {
    const response = await axios.post(`/administrators/${id}/restore`);
    return response.data;
  }
};
