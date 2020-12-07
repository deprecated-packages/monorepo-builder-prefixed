<?php

namespace _PhpScoper94f327c48d46\Psr\Log;

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
    public function setLogger(\_PhpScoper94f327c48d46\Psr\Log\LoggerInterface $logger);
}
