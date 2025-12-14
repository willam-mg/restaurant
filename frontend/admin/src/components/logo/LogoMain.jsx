// material-ui
import { useTheme } from '@mui/material/styles';
import LogoIcon from './LogoIcon';
// ==============================|| LOGO SVG ||============================== //

export default function LogoMain() {
  const theme = useTheme();
  return (
    <LogoIcon></LogoIcon>
  );
}
