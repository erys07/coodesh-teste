<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Configuration\Configuration;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

return function (Configuration $configuration) {
    $configuration
        ->schedule(function (Schedule $schedule) {
            $schedule->command('import:openfood')->dailyAt('03:00');
        });
};