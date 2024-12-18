<?php

namespace Hbv\KafkaCommunication\Console;

use Illuminate\Console\Command;
use Hbv\KafkaCommunication\Services\Communicate;

class ConsumeCommand extends Command
{
    protected $signature = 'KafkaCommunication:consume {topic}';
    protected $description = 'Consume messages from Kafka topic and send response to dynamic topic';

    public function handle()
    {
        $topic = $this->argument('topic');

        $this->info("Listening on topic: $topic");

        app(Communicate::class)->listen($topic);
    }
}
