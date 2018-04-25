<?php

namespace hschulz\Event;

/**
 *
 */
interface Event
{
    /**
     *
     * @var string
     */
    const EVENT_ALL = '*';

    /**
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get parameters passed to the event
     *
     * @return array
     */
    public function getParams(): array;

    /**
     * Get a single parameter by name
     *
     * @param  string $name
     * @return mixed
     */
    public function getParam(string $name);

    /**
     * Set the event name
     *
     * @param  string $name
     * @return void
     */
    public function setName(string $name): void;

    /**
     * Set event parameters
     *
     * @param  array $params
     * @return void
     */
    public function setParams(array $params): void;

    /**
     * Indicate whether or not to stop propagating this event
     *
     * @param  bool $flag
     * @return void
     */
    public function stopPropagation(bool $flag): void;

    /**
     * Has this event indicated event propagation should stop?
     *
     * @return bool
     */
    public function isPropagationStopped(): bool;
}
