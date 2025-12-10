const express = require('express');
const http = require('http');
const SocketIO = require('socket.io');
const cors = require('cors');
const bodyParser = require('body-parser');
const typeUsers = require('./data/channels-role.json');
const modules = require('./data/channels-module.json');

const app = express();
const server = http.createServer(app);
const io = SocketIO(server, {
    cors: {
        origin: "*",
        methods: ["GET", "POST"]
    }
});

app.use(cors());
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Puerto
const PORT = process.env.PORT || 3220;

// SOCKET.IO
io.on('connection', (socket) => {
    console.log('New connection:', socket.id);

    // Unir el socket a "rooms" por tipo de usuario
    typeUsers.forEach(typeUser => socket.join(typeUser));

    // Evento genérico para actualizar un módulo
    socket.on('module:update', (payload) => {
        /**
         * payload = {
         *  role: 'admin',
         *  module: 'taxis',
         *  action: 'create|update|delete',
         *  data: { ... }
         * }
         */
        if (payload.role && payload.module) {
            io.to(payload.role).emit(`module:${payload.module}`, payload);
            console.log(`Emitted to ${payload.role} on module:${payload.module}`, payload);
        }
    });

    socket.on('disconnect', () => {
        console.log('Disconnected:', socket.id);
    });
});

// Rutas REST para emitir eventos desde backend
app.post('/:role/:module', (req, res) => {
    const { role, module } = req.params;
    const payload = {
        role,
        module,
        action: req.body.action || 'update',
        data: req.body.data
    };
    io.to(role).emit(`module:${module}`, payload);
    res.json({ status: 'ok', emitted: payload });
});

app.get('/', (req, res) => {
    res.send('Socket.IO server running');
});

server.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
