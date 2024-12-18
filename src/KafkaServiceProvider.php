<?php

namespace Hbv\KafkaCommunication;

use Illuminate\Support\ServiceProvider;

class KafkaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->commands([
            \Hbv\KafkaCommunication\Commands\KafkaConsumeCommand::class
        ]);
    }

}
