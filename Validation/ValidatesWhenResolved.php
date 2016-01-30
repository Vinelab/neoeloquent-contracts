<?php

namespace Vinelab\NeoEloquent\Contracts\Validation;

interface ValidatesWhenResolved
{
    /**
     * Validate the given class instance.
     */
    public function validate();
}
