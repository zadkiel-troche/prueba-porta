<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendUserInactiveReminder;

class CommandInactiveUserReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:send-inactive-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder to inactive users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SendUserInactiveReminder::dispatch();
        
        $this->info('Inactive user reminders sent successfully.');
    }
}
