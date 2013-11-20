<?php
/**
 * @author Matteo Giachino <matteog@gmail.com>
 */

namespace PhpAmqpLib\Builder;

/**
 * Class Exchange
 *
 * represent an AMQP exchange with a fluent interface
 */
class Exchange
{
    private $name;
    private $type;
    private $passive;
    private $durable;
    private $auto_delete;
    private $internal;
    private $nowait;
    private $arguments;
    private $ticket;

    /**
     * @param string $name
     */
    private function __construct($name)
    {
        $this->name = $name;
        $this->passive = false;
        $this->durable = false;
        $this->auto_delete = true;
        $this->internal = false;
        $this->nowait = false;
        $this->arguments = null;
        $this->ticket = null;
    }

    /**
     * @param string $name
     *
     * @return Exchange
     */
    public static function create($name)
    {
        return new self($name);
    }

    /**
     * array of all parameters
     *
     * @return array
     */
    public function params()
    {
        return array(
            $this->name,
            $this->passive,
            $this->durable,
            $this->auto_delete,
            $this->internal,
            $this->nowait,
            $this->arguments,
            $this->ticket
        );
    }

    /**
     * Set Passive
     *
     * @param boolean $passive the passive variable
     *
     * @return Exchange
     */
    public function setPassive($passive)
    {
        $this->passive = $passive;

        return $this;
    }

    /**
     * Set Durable
     *
     * @param boolean $durable the durable variable
     *
     * @return Exchange
     */
    public function setDurable($durable)
    {
        $this->durable = $durable;

        return $this;
    }

    /**
     * Set AutoDelete
     *
     * @param boolean $auto_delete the auto_delete variable
     *
     * @return Exchange
     */
    public function setAutoDelete($auto_delete)
    {
        $this->auto_delete = $auto_delete;

        return $this;
    }

    /**
     * Set Internal
     *
     * @param boolean $internal the internal variable
     *
     * @return Exchange
     */
    public function setInternal($internal)
    {
        $this->internal = $internal;

        return $this;
    }

    /**
     * Set Nowait
     *
     * @param boolean $nowait the nowait variable
     *
     * @return Exchange
     */
    public function setNowait($nowait)
    {
        $this->nowait = $nowait;

        return $this;
    }

    /**
     * Set Arguments
     *
     * @param null $arguments the arguments variable
     *
     * @return Exchange
     */
    public function setArguments($arguments)
    {
        $this->arguments = $arguments;

        return $this;
    }

    /**
     * Set Ticket
     *
     * @param null $ticket the ticket variable
     *
     * @return Exchange
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }
}
