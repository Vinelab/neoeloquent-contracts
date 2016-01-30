<?php

namespace Vinelab\NeoEloquent\Contracts\Routing;

use Closure;

interface Registrar
{
    /**
     * Register a new GET route with the router.
     *
     * @param string                $uri
     * @param \Closure|array|string $action
     */
    public function get($uri, $action);

    /**
     * Register a new POST route with the router.
     *
     * @param string                $uri
     * @param \Closure|array|string $action
     */
    public function post($uri, $action);

    /**
     * Register a new PUT route with the router.
     *
     * @param string                $uri
     * @param \Closure|array|string $action
     */
    public function put($uri, $action);

    /**
     * Register a new DELETE route with the router.
     *
     * @param string                $uri
     * @param \Closure|array|string $action
     */
    public function delete($uri, $action);

    /**
     * Register a new PATCH route with the router.
     *
     * @param string                $uri
     * @param \Closure|array|string $action
     */
    public function patch($uri, $action);

    /**
     * Register a new OPTIONS route with the router.
     *
     * @param string                $uri
     * @param \Closure|array|string $action
     */
    public function options($uri, $action);

    /**
     * Register a new route with the given verbs.
     *
     * @param array|string          $methods
     * @param string                $uri
     * @param \Closure|array|string $action
     */
    public function match($methods, $uri, $action);

    /**
     * Route a resource to a controller.
     *
     * @param string $name
     * @param string $controller
     * @param array  $options
     */
    public function resource($name, $controller, array $options = array());

    /**
     * Create a route group with shared attributes.
     *
     * @param array    $attributes
     * @param \Closure $callback
     */
    public function group(array $attributes, Closure $callback);

    /**
     * Register a new "before" filter with the router.
     *
     * @param string|callable $callback
     */
    public function before($callback);

    /**
     * Register a new "after" filter with the router.
     *
     * @param string|callable $callback
     */
    public function after($callback);

    /**
     * Register a new filter with the router.
     *
     * @param string          $name
     * @param string|callable $callback
     */
    public function filter($name, $callback);
}
