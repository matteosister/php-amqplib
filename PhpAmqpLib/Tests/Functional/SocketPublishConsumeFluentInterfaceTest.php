<?php

namespace PhpAmqpLib\Tests\Functional;

use PhpAmqpLib\Builder\Exchange;
use PhpAmqpLib\Connection\AMQPSocketConnection;

class SocketPublishConsumeFluentInterfaceTest extends AbstractPublishConsumeTest
{
    public function setUp()
    {
        $this->conn = $this->createConnection();
        $this->ch = $this->conn->channel();

        $this->ch->exchange_declare(
             Exchange::create($this->exchange_name, 'direct')
                ->setPassive(false)
                ->setDurable(false)
                ->setAutoDelete(false),
             'direct'
        );
        list($this->queue_name,,) = $this->ch->queue_declare();
        $this->ch->queue_bind($this->queue_name, $this->exchange_name, $this->queue_name);
    }

    protected function createConnection()
    {
        return new AMQPSocketConnection(HOST, PORT, USER, PASS, VHOST);
    }
}
