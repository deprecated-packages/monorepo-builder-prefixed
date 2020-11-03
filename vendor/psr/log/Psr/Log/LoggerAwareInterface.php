<?php

namespace _PhpScoperf9ff1c3447b1\Psr\Log;

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
    public function setLogger(\_PhpScoperf9ff1c3447b1\Psr\Log\LoggerInterface $logger);
}
