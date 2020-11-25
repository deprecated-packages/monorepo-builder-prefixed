<?php

namespace _PhpScoper5665d3e54f4c\Psr\Log;

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
    public function setLogger(\_PhpScoper5665d3e54f4c\Psr\Log\LoggerInterface $logger);
}
