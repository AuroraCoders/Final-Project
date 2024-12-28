<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User; // Ensure you use your User model
use App\Notifications\NotifyUsers;

class SendNotifications extends Command
{
    protected $signature = 'send:notifications';
    protected $description = 'Send notifications to users';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $users = User::all(); // Adjust query as needed
        foreach ($users as $user) {
            $user->notify(new NotifyUsers());
        }

        $this->info('Notifications have been sent.');
    }
}
