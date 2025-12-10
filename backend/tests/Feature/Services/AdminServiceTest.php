<?php
namespace Tests\Feature\Services;

use App\Services\AdminService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminServiceTest extends TestCase
{
    public function test_it_create_a_admin()
    {
        parent::setUp();
        Storage::fake('public');

        $adminService = app(AdminService::class);
        $data = [
            'name' => 'John Doe',
            'role' => 'developer',
            'area' => 'Development',
            'email' => 'B5hYB@example.com',
            'password' => '12345678',
        ];

        $photo = UploadedFile::fake()->image('photo.jpg');

        $admin = $adminService->create($data, $photo);

        $this->assertDatabaseHas('admin', [
            'name' => $data['name'],
            'role' => $data['role'],
            'area' => $data['area'],
        ]);
        $this->assertNotNull($admin->photo_src);
    }
}
