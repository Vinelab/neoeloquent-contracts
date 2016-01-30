<?php

namespace Vinelab\NeoEloquent\Contracts\Http;

interface Kernel
{
    /**
     * Bootstrap the application for HTTP requests.
     */
    public function bootstrap();

    /**
     * Handle an incoming HTTP request.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request);

    /**
     * Perform any final actions for the request lifecycle.
     *
     * @param \Symfony\Component\HttpFoundation\Request  $request
     * @param \Symfony\Component\HttpFoundation\Response $response
     */
    public function terminate($request, $response);

    /**
     * Get the Laravel application instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function getApplication();
}
