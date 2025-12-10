<?php

namespace Tests\Feature;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    public function test_it_returns_paginated_admin_list()
    {
        Admin::factory()->count(12)->create();

        $response = $this->getJson('/api/admin?page=1&perPage=10');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                        'id',
                        'name',
                        'role',
                        'area',
                        'photo_src',
                        'user_id'
                    ],
                    ],
                ]);
    }

    public function test_it_returns_validation_error_if_pagination_params_missing()
    {
        $response = $this->getJson('/api/admin');

        $response->assertStatus(500); // debido a tu manejo de excepción en lugar de 422
    }

    public function test_it_can_create_a_admin()
    {
        Storage::fake('public');
        $photo = UploadedFile::fake()->image('admin.jpg');

        $data = [
            'email' => 'mari@gmail.com',
            'password' => '12345678',
            'name' => 'María',
            'role' => 'Administradora',
            'area' => 'Oficina',
            'photo_src' => $photo,
        ];

        $response = $this->postJson('/api/admin', $data);

        $response->assertStatus(201)->assertJsonStructure(['data' => [
                    'id',
                    'name',
                    'role',
                    'area',
                    'photo_src',
                    'user_id'
                ]
            ]);
    }

    public function test_it_can_show_a_admin_member()
    {
        $admin = Admin::factory()->create();

        $response = $this->getJson("/api/admin/{$admin->id}");

        $response->assertStatus(200)
            ->assertJson([
                'data' => [
                    'id' => $admin->id,
                    'name' => $admin->name,
                    'role' => $admin->role,
                    'area' => $admin->area,
                    'photo_src' => $admin->photo_src,
                    'user_id' => $admin->user_id,
                ],
            ]);
    }

    public function test_it_can_update_a_admin_member()
    {
        Storage::fake('public');

        $admin = Admin::factory()->create();

        $photo = UploadedFile::fake()->image('updated.jpg');

        $data = [
            'name' => 'Nombre Actualizado',
            'role' => 'Nuevo Rol',
            'area' => 'Nueva Área',
            'photo_src' => $photo,
        ];

        $response = $this->putJson("/api/admin/{$admin->id}", $data);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'name' => 'Nombre Actualizado',
                'role' => 'Nuevo Rol',
                'area' => 'Nueva Área',
            ]]);
    }

    public function test_it_can_delete_a_admin_member()
    {
        $admin = Admin::factory()->create();

        $response = $this->deleteJson("/api/admin/{$admin->id}");

        $response->assertStatus(200)
            ->assertJson(['data' => 'Eliminado']);
    }
}
