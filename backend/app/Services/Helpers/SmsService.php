<?php

namespace App\Services\Helpers;

use Illuminate\Support\Facades\Http;

class SmsService
{
    protected $url;
    protected $token;

    public function __construct()
    {
        $this->url = config('whapi.url');
        $this->token = config('whapi.token');
    }

    public function sendSMS(string $phone, string $message)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type'  => 'application/json',
        ])->post($this->url . '/messages/text', [
            'to'   => '591'.$phone,  // formato internacional: 5917XXXXXXX
            'body' => $message,
        ]);

        return $response->json();
    }
}
