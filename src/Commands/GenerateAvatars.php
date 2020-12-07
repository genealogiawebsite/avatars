<?php

namespace LaravelEnso\Avatars\Commands;

use Illuminate\Console\Command;
use LaravelEnso\Core\Models\User;

class GenerateAvatars extends Command
{
    protected $signature = 'enso:avatars:generate';

    protected $description = 'Generates missing user avatars';

    public function handle()
    {
        User::doesntHave('avatar')->get()->each->generateAvatar();

        $this->info('Avatars generated successfully');
    }
}
