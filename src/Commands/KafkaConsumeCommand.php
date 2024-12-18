<?php

namespace Hbv\KafkaCommunication;

use Illuminate\Console\Command;
use Hbv\KafkaCommunication\Services\Communicate;

class KafkaConsumeCommand extends Command
{
    protected $signature = 'kafka:consume';
    protected $description = 'Consume messages from Kafka topic and send response to dynamic topic';

    public function handle()
    {
        $this->info("Listening on topic");
        app(Communicate::class)->listen();
    }
}
