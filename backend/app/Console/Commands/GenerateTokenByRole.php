<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Administrador;
use App\Models\Taxi;
use App\Models\Cliente;

class GenerateTokenByRole extends Command
{
    protected $signature = 'sanctum:tokenuser {role} {name=default}';
    // protected $signature = 'token:generate {role} {id} {name=default}';
    protected $description = 'Genera un token de acceso para un rol específico (administrador, taxi, cliente)';

    public function handle()
    {
        $role = strtolower($this->argument('role'));
        // $id = $this->argument('id');
        $name = $this->argument('name');

        $user = null;

        switch ($role) {
            case 'admin':
                $admin = Administrador::first();
                if ($admin) {
                    $user = $admin->user; // asumiendo que tiene relación con user
                }
                break;

            case 'driver':
                $taxi = Taxi::first();
                if ($taxi) {
                    $user = $taxi->user;
                }
                break;

            case 'rider':
                $cliente = Cliente::first();
                if ($cliente) {
                    $user = $cliente->user;
                }
                break;

            default:
                $this->error("Rol inválido. Usa: administrador, taxi o cliente.");
                return 1;
        }

        if (!$user) {
            $this->error("No se encontró el usuario con ID para el rol $role.");
            return 1;
        }

        $token = $user->createToken($name)->plainTextToken;
        $this->info("Token generado para el rol '$role':");
        $this->line($token);
        return 0;
    }
}
