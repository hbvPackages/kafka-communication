<?php

namespace Hbv\KafkaCommunication;

use Hbv\KafkaCommunication\Console\KafkaConsumeCommand;
use Illuminate\Support\ServiceProvider;

class KafkaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands(KafkaConsumeCommand::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

}
