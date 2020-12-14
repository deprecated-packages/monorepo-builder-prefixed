<?php

namespace _PhpScoperdd624bbcb4e5\Psr\Log;

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
    public function setLogger(\_PhpScoperdd624bbcb4e5\Psr\Log\LoggerInterface $logger);
}
