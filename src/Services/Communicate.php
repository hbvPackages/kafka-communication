<?php

namespace Hbv\KafkaCommunication\Services;

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

        $producer = Kafka::publish('topic')
            ->withMessage($message);
        $producer->send();
    }

    /**
     * @param $topic
     * @return void
     */
    public function listen($topic): void
    {
        Kafka::consumer()
            ->subscribe($topic)
            ->withHandler(function (ConsumedMessage $message) use ($topic) {
                logger()->info("Communicating with {$message->getBody()}");
            });
    }
}
