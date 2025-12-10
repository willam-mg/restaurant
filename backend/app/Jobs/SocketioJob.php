<?php
namespace App\Jobs;

use App\Services\Helpers\SocketioService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Throwable;
use Illuminate\Support\Facades\Log;

class SocketioJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;        // reintentos automáticos
    public $backoff = 5;      // segundos de espera entre reintentos

    public function __construct(
        private string $role,
        private string $module,
        private string $action,
        private array $data = []
    ) {}

    public function handle(SocketioService $service)
    {
        Log::info("SocketIOJob ejecutando sendHttp...", [
            'role' => $this->role,
            'module' => $this->module,
            'action' => $this->action,
            'data' => $this->data
        ]);
        $service->sendHttp($this->role, $this->module, $this->action, $this->data);
    }

    public function failed(Throwable $exception): void
    {
        Log::error("SocketIO job failed: ".$exception->getMessage(), [
            'role' => $this->role,
            'module' => $this->module,
            'action' => $this->action,
            'data' => $this->data
        ]);
    }
}
