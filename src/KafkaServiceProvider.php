<?php

use Illuminate\Support\ServiceProvider;

class KafkaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands('command.kafkacommunication.install');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

}
