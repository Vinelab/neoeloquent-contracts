<?php

namespace Vinelab\NeoEloquent\Contracts\Routing;

interface TerminableMiddleware extends Middleware
{
    /**
     * Perform any final actions for the request lifecycle.
     *
     * @param \Symfony\Component\HttpFoundation\Request  $request
     * @param \Symfony\Component\HttpFoundation\Response $response
     */
    public function terminate($request, $response);
}
