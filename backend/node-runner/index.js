const { exec } = require('child_process');
const path = require('path');

// Ruta hacia tu proyecto Laravel (ajústala)
const LARAVEL_PATH = '/home/tvrvlxbv/api.jetgo.mobi';

// Función que ejecuta el worker
function runQueueWorker() {
    // queue:work --tries=3 --timeout=60clear  // este comando es para correr el job permanentemente
    const command = `cd ${LARAVEL_PATH} && /usr/local/bin/ea-php82 artisan queue:work --once --tries=3 --timeout=60`;

    exec(command, (error, stdout, stderr) => {
        if (error) console.error('❌ Error ejecutando job:', error.message);
        if (stderr) console.error('⚠️ stderr:', stderr);
        if (stdout) console.log('✅ Job ejecutado:', stdout.trim());
    });
}

// Ejecutar cada 2 segundos
setInterval(runQueueWorker, 2000);

console.log('🚀 Queue runner iniciado con PM2...');
