<?php

namespace _PhpScoperf48ea5df9e9b\Psr\Log;

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
    public function setLogger(\_PhpScoperf48ea5df9e9b\Psr\Log\LoggerInterface $logger);
}
