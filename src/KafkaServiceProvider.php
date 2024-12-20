<?php

namespace Hbv\KafkaCommunication;

use Hbv\KafkaCommunication\Console\ConsumeCommand;
use Illuminate\Support\ServiceProvider;

class KafkaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands(ConsumeCommand::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

}
