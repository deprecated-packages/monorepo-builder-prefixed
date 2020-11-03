<?php

namespace _PhpScoper30e4ccea42bd\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper30e4ccea42bd\Psr\Log\LoggerInterface $logger);
}
