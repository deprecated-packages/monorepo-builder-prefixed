<?php

namespace _PhpScoper53a6895b9c5b\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScoper53a6895b9c5b\Psr\Log\LoggerInterface $logger);
}
