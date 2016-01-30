<?php

namespace Vinelab\NeoEloquent\Contracts\Broadcasting;

interface Factory
{
    /**
     * Get a broadcaster implementation by name.
     *
     * @param string $name
     */
    public function connection($name = null);
}
