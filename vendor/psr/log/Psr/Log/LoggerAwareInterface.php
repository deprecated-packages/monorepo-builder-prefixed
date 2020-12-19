<?php

namespace _PhpScoperf6f8e31183c3\Psr\Log;

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
    public function setLogger(\_PhpScoperf6f8e31183c3\Psr\Log\LoggerInterface $logger);
}
