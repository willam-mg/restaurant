<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class GenerateSanctumToken extends Command
{
    /**
     * El nombre y la firma del comando de Artisan.
     *
     * Por ejemplo: php artisan sanctum:token 1 read write
     */
    protected $signature = 'sanctum:token 
        {user_id : ID del usuario para generar el token} 
        {abilities?* : Permisos del token (opcional, ej: read write)}';

    /**
     * Descripción del comando.
     */
    protected $description = 'Genera un token de Sanctum para un usuario específico';

    /**
     * Ejecuta el comando.
     */
    public function handle()
    {
        $userId = $this->argument('user_id');
        $abilities = $this->argument('abilities') ?: ['*'];

        $user = User::find($userId);

        if (!$user) {
            $this->error("No se encontró un usuario con ID {$userId}");
            return Command::FAILURE;
        }

        $token = $user->createToken('CLI Token', $abilities)->plainTextToken;

        $this->info("Token generado para el usuario ID {$userId}:");
        $this->line($token);

        return Command::SUCCESS;
    }
}
