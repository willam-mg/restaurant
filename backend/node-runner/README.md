### Para que funcione este projecto seguir estos pasos:
1.- desplegar los archivos index.js, package.json y pachage-lock.json puede ser en el mismo directorio que este 
2.- crear el projeto en node js 
    seleccionar node version 20 en modo production
    crear un subdominio con el nombre runner.dominio.com
    seleccionar esete dominio
    en ruta agregar este directorio
    en archivo de inicio es index.js
    instalar con npm isntall
    copiar el link de consola
3.- abrir la consola y pegar el link copiado y ejecutar los siguientes comandos;
npm install pm2 --save
npx pm2 start index.js --name queue-runner











### DOCUMENTACION ADICIONAL 
#### Inicia el proceso con:
pm2 start index.js --name queue-runner

Verifica que esté corriendo:
pm2 list

Ver logs en tiempo real:
pm2 logs queue-runner


Asegurar persistencia tras reinicio del servidor
Guarda la configuración para que PM2 lo arranque automáticamente cuando tu hosting reinicie (si lo permite):
pm2 save
Y para activar el autoarranque:\
pm2 startup


Comandos útiles
Acción	Comando
Listar procesos	pm2 list
Ver logs	pm2 logs
Detener proceso	pm2 stop queue-runner
Reiniciar proceso	pm2 restart queue-runner
Eliminar proceso	pm2 delete queue-runner
Guardar configuración actual	pm2 save
