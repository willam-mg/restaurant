// assets
import { ChromeOutlined, DashboardOutlined, QuestionOutlined } from '@ant-design/icons';

// icons
const icons = {
  ChromeOutlined,
  QuestionOutlined,
  DashboardOutlined
};

// ==============================|| MENU ITEMS - SAMPLE PAGE & DOCUMENTATION ||============================== //

const administrators = {
  id: 'system',
  title: 'System',
  type: 'group',
  children: [
    {
      id: 'dashboard',
      title: 'Dashboard',
      type: 'item',
      url: '/dashboard/default',
      icon: icons.DashboardOutlined,
      breadcrumbs: false
    },
    {
      id: 'administrators-list',
      title: 'Administradores',
      type: 'item',
      url: '/administrators',
      icon: icons.ChromeOutlined
    },
    // {
    //   id: 'administrators-create',
    //   title: 'Nuevo',
    //   type: 'item',
    //   url: '/adminsitrators/craete',
    //   icon: icons.QuestionOutlined,
    //   external: true,
    //   target: true
    // }
  ]
};

export default administrators;
