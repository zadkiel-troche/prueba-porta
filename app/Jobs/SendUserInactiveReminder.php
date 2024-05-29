<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserInactiveReminderMail;
use App\Models\User;

class SendUserInactiveReminder 
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users = User::where('last_login', '<', date('Y-m-d H:i:s', strtotime('-30 days')))->get();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new UserInactiveReminderMail($user));
        }
    }
}
