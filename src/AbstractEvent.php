<?php

namespace hschulz\Event;

/**
 * Description of AbstractEvent
 */
abstract class AbstractEvent implements Event
{

    /**
     *
     * @var string
     */
    protected $name = '';

    /**
     *
     * @var array
     */
    protected $params = [];

    /**
     *
     * @var bool
     */
    protected $isPropagated = true;

    /**
     *
     */
    public function __construct()
    {
        $this->name         = '';
        $this->params       = [];
        $this->isPropagated = true;
    }

    /**
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     *
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     *
     * @param array $params
     * @return void
     */
    public function setParams(array $params): void
    {
        $this->params = $params;
    }

    /**
     *
     * @param bool $flag
     * @return void
     */
    public function stopPropagation(bool $flag = true): void
    {
        $this->isPropagated = !$flag;
    }

    /**
     *
     * @param string $name
     * @return mixed
     */
    public function getParam(string $name)
    {
    }

    /**
     *
     * @return bool
     */
    public function isPropagationStopped(): bool
    {
        return $this->isPropagated;
    }
}
