<?php

namespace App\Services\Helpers;

use App\Enums\ChannelRoleEnum;
use App\Jobs\SocketioJob;
use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Log;

class SocketioService
{
    private string $socketUrl;

    private const ACTION_CREATE = 'create';
    private const ACTION_UPDATE = 'update';
    private const ACTION_DELETE = 'delete';

    public function __construct()
    {
        $this->socketUrl = config('socketio.path', 'https://socket.jetgo.mobi/');
    }

    /**
     * Este método es el que hace realmente el envío HTTP
     */
    public function sendHttp(string $role, string $module, string $action, array $data = []): void
    {
        $payload = [
            'role' => $role,
            'module' => $module,
            'action' => $action,
            'data' => $data,
        ];

        try {
            $response = Http::post("{$this->socketUrl}{$role}/{$module}", $payload);

            if ($response->failed()) {
                throw new \Exception("HTTP request failed: " . $response->body());
            }
            Log::info('SocketIO Job ejecutado', ['role'=>$role, 'module'=>$module]);

        } catch (\Throwable $e) {
            throw new \Exception("Socket HTTP emit failed: " . $e->getMessage());
        }
    }

    /**
     * Este método ahora **solo encola el Job**
     */
    public function send(string $role, string $module, string $action, array $data = []): void
    {
        SocketioJob::dispatch($role, $module, $action, $data);
    }

    // helpers de roles y CRUD
    public function emmitToAdministrator(string $module, array $data): void
    {
        $this->send(ChannelRoleEnum::ADMINISTRATOR->value, $module, self::ACTION_UPDATE, $data);
    }

    public function emmitToDriver(string $module, array $data): void
    {
        $this->send(ChannelRoleEnum::DRIVER->value, $module, self::ACTION_UPDATE, $data);
    }

    public function create(string $role, string $module, array $data): void
    {
        $this->send($role, $module, self::ACTION_CREATE, $data);
    }

    public function update(string $role, string $module, array $data): void
    {
        $this->send($role, $module, self::ACTION_UPDATE, $data);
    }

    public function delete(string $role, string $module, array $data): void
    {
        $this->send($role, $module, self::ACTION_DELETE, $data);
    }
}
