<?php
namespace App\Console\Commands;

use App\Enums\ChannelModuleEnum;
use Illuminate\Console\Command;
use App\Enums\ChannelRoleEnum;

class ExportChannels extends Command
{
    protected $signature = 'channels:export';
    protected $description = 'Exportar lista de canales a JSON para Node.js';

    public function handle()
    {
        $channelsRole = ChannelRoleEnum::values();
        $path = base_path('socket/data/channels-role.json');
        file_put_contents($path, json_encode($channelsRole, JSON_PRETTY_PRINT));

        $channelsModules = ChannelModuleEnum::values();
        $path = base_path('socket/data/channels-module.json');
        file_put_contents($path, json_encode($channelsModules, JSON_PRETTY_PRINT));

        $this->info("Canales exportados a {$path}");
        return Command::SUCCESS;
    }
}
