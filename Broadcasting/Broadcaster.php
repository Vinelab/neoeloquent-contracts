<?php

namespace Vinelab\NeoEloquent\Contracts\Broadcasting;

interface Broadcaster
{
    /**
     * Broadcast the given event.
     *
     * @param array  $channels
     * @param string $event
     * @param array  $payload
     */
    public function broadcast(array $channels, $event, array $payload = []);
}
