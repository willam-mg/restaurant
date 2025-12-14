import axiosServices from 'utils/axios';

export const loginRequest = async (email, password) => {
  const response = await axiosServices.post('/auth/administrator', {
    email,
    password
  });

  return response.data;
};

export const logout = async () => {
  try {
    await axios.post('/logout');
  } catch (error) {
    // si falla igual limpiamos sesión
    console.warn('Logout API failed');
  } finally {
    localStorage.removeItem('token');
    localStorage.removeItem('user');
  }
};