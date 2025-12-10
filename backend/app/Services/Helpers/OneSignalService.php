<?php
namespace App\Services\Helpers;

use Illuminate\Support\Facades\Http;

class OneSignalService
{
    private $appId;
    private $apiKey;
    
    public function __construct()
    {
        $this->appId  = config('onesignal.app_id');
        $this->apiKey = config('onesignal.api_key');
    }

    /**
     * Enviar notificación a un dispositivo específico
     *
     * @param string $playerId ID del dispositivo (OneSignal Player ID)
     * @param string $message Contenido del mensaje
     * @param array|null $data Datos adicionales opcionales
     * @return array Respuesta de la API de OneSignal
     */
    public function sendMessageDevice($playerId, $message, $data = null)
    {
        $payload = [
            'app_id' => $this->appId,
            'include_player_ids' => [$playerId],
            // 'data' => null,
            'contents' => [
                'en' => $message,
            ],
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . $this->apiKey,
            'Content-Type'  => 'application/json',
        ])->post('https://onesignal.com/api/v1/notifications', $payload);

        return $response->json();
    }

    /**
     * Enviar notificación a todos los usuarios (segmento "All")
     *
     * @param string $message Contenido del mensaje
     * @param array|null $data Datos adicionales opcionales
     * @return array Respuesta de la API de OneSignal
     */
    public function sendMessageAll($message, $data = null)
    {
        $payload = [
            'app_id' => $this->appId,
            'included_segments' => ['All'],
            'data' => $data ?? [],
            'contents' => [
                'en' => $message,
            ],
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . $this->apiKey,
            'Content-Type'  => 'application/json',
        ])->post('https://onesignal.com/api/v1/notifications', $payload);

        return $response->json();
    }
}
