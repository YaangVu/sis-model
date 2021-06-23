<?php


namespace YaangVu\SisModel\App\Traits;


use Exception;
use Illuminate\Support\Facades\Log;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exchange\AMQPExchangeType;
use PhpAmqpLib\Message\AMQPMessage;
use YaangVu\RabbitMQ\RabbitMQConnection;

trait RabbitMQ
{
    public AMQPStreamConnection $connection;

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $host     = env('RABBITMQ_HOST');
        $port     = env("RABBITMQ_PORT");
        $user     = env("RABBITMQ_USER");
        $password = env('RABBITMQ_PASSWORD');
        $vHost    = env("RABBITMQ_VHOST");

        $this->connection = (new RabbitMQConnection())
            ->setHost($host)
            ->setPort($port)
            ->setUser($user)
            ->setPassword($password)
            ->setVHost($vHost)
            ->connect();
    }

    /**
     * @param array  $body
     * @param string $exchange
     * @param string $type
     * @param string $routingKey
     *
     * @throws Exception
     */
    public function pushToExchange(array $body, string $exchange, string $type = AMQPExchangeType::DIRECT,
                                   string $routingKey = ''): void
    {
        $this->init();

        $channel = $this->connection->channel();

        $channel->exchange_declare($exchange, $type, false, true, false);

        $messageBody = json_encode($body);

        $message = new AMQPMessage($messageBody, ['content_type' => 'text/plain']);

        if (empty($routingKey))
            $channel->basic_publish($message, $exchange);
        else
            $channel->basic_publish($message, $exchange, $routingKey);

        Log::info("Push to RabbitMQ exchange: $exchange, type: $type, routing key: $routingKey, body: ", $body);

        $channel->close();
        $this->connection->close();
    }

    public function setQueue()
    {
        // Do something
    }
}
