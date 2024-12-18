<?php

namespace Hbv\KafkaCommunication;

use Illuminate\Console\Command;
use Hbv\KafkaCommunication\Services\Communicate;

class KafkaConsumeCommand extends Command
{
    protected $signature = 'kafka:consume {topic} {responseTopic}';
    protected $description = 'Consume messages from Kafka topic and send response to dynamic topic';

    public function handle()
    {
        $topic = $this->argument('topic');

        $this->info("Listening on topic: $topic");

        app(Communicate::class)->listen($topic);
    }
}
