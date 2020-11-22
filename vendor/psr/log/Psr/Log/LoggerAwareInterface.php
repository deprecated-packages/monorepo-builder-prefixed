<?php

namespace _PhpScoperf7284855206a\Psr\Log;

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
    public function setLogger(\_PhpScoperf7284855206a\Psr\Log\LoggerInterface $logger);
}
