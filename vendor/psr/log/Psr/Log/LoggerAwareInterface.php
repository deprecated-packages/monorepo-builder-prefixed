<?php

namespace _PhpScoper9a3298f96fa4\Psr\Log;

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
    public function setLogger(\_PhpScoper9a3298f96fa4\Psr\Log\LoggerInterface $logger);
}
