<?php

namespace Hbv\KafkaCommunication\Services;

use Illuminate\Support\Facades\Log;
use Junges\Kafka\Message\ConsumedMessage;
use Junges\Kafka\Message\Message;
use Junges\Kafka\Facades\Kafka;

class Communicate
{
    protected static $topic;

    /**
     * @param $topic
     * @return static
     */
    public static function withTopic($topic): static
    {
        self::$topic = $topic;
        return new static();
    }

    /**
     * @param $body
     * @return void
     * @throws \Exception
     */
    public function publish($body): void
    {
        $message = new Message(
            headers: ['x-api-key' => env('X_API_KEY'), 'x-secret-key' => env('X_SECRET_KEY')],
            body: $body
        );

        $producer = Kafka::publish(self::$topic)
            ->withMessage($message);
        $producer->send();
    }

    /**
     * @return void
     */
    public function listen(): void
    {
        die('here');
    }
}
