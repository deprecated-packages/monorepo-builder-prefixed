<?php

namespace _PhpScoperee8f03533f8b\Psr\Log;

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
    public function setLogger(\_PhpScoperee8f03533f8b\Psr\Log\LoggerInterface $logger);
}
