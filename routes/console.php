<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Console\Comands\CommandInactiveUserReminder;

Schedule::command('reminder:send-inactive-user')->daily();