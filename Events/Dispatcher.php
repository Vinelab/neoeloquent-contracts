<?php

namespace Vinelab\NeoEloquent\Contracts\Events;

interface Dispatcher
{
    /**
     * Register an event listener with the dispatcher.
     *
     * @param string|array $events
     * @param mixed        $listener
     * @param int          $priority
     */
    public function listen($events, $listener, $priority = 0);

    /**
     * Determine if a given event has listeners.
     *
     * @param string $eventName
     *
     * @return bool
     */
    public function hasListeners($eventName);

    /**
     * Register an event and payload to be fired later.
     *
     * @param string $event
     * @param array  $payload
     */
    public function push($event, $payload = []);

    /**
     * Register an event subscriber with the dispatcher.
     *
     * @param object|string $subscriber
     */
    public function subscribe($subscriber);

    /**
     * Fire an event until the first non-null response is returned.
     *
     * @param string $event
     * @param array  $payload
     *
     * @return mixed
     */
    public function until($event, $payload = []);

    /**
     * Flush a set of pushed events.
     *
     * @param string $event
     */
    public function flush($event);

    /**
     * Fire an event and call the listeners.
     *
     * @param string|object $event
     * @param mixed         $payload
     * @param bool          $halt
     *
     * @return array|null
     */
    public function fire($event, $payload = [], $halt = false);

    /**
     * Get the event that is currently firing.
     *
     * @return string
     */
    public function firing();

    /**
     * Remove a set of listeners from the dispatcher.
     *
     * @param string $event
     */
    public function forget($event);

    /**
     * Forget all of the queued listeners.
     */
    public function forgetPushed();
}
