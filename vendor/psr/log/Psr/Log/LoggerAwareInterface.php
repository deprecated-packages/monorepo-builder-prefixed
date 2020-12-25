<?php

namespace _PhpScoperff72c38d4e2a\Psr\Log;

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
    public function setLogger(\_PhpScoperff72c38d4e2a\Psr\Log\LoggerInterface $logger);
}
