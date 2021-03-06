<?php

namespace Vinelab\NeoEloquent\Contracts\Logging;

interface Log
{
    /**
     * Log an alert message to the logs.
     *
     * @param string $message
     * @param array  $context
     */
    public function alert($message, array $context = []);

    /**
     * Log a critical message to the logs.
     *
     * @param string $message
     * @param array  $context
     */
    public function critical($message, array $context = []);

    /**
     * Log an error message to the logs.
     *
     * @param string $message
     * @param array  $context
     */
    public function error($message, array $context = []);

    /**
     * Log a warning message to the logs.
     *
     * @param string $message
     * @param array  $context
     */
    public function warning($message, array $context = []);

    /**
     * Log a notice to the logs.
     *
     * @param string $message
     * @param array  $context
     */
    public function notice($message, array $context = []);

    /**
     * Log an informational message to the logs.
     *
     * @param string $message
     * @param array  $context
     */
    public function info($message, array $context = []);

    /**
     * Log a debug message to the logs.
     *
     * @param string $message
     * @param array  $context
     */
    public function debug($message, array $context = []);

    /**
     * Log a message to the logs.
     *
     * @param string $level
     * @param string $message
     * @param array  $context
     */
    public function log($level, $message, array $context = []);

    /**
     * Register a file log handler.
     *
     * @param string $path
     * @param string $level
     */
    public function useFiles($path, $level = 'debug');

    /**
     * Register a daily file log handler.
     *
     * @param string $path
     * @param int    $days
     * @param string $level
     */
    public function useDailyFiles($path, $days = 0, $level = 'debug');
}
