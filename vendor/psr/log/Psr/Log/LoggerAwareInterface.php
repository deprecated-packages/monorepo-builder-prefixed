<?php

namespace _PhpScoperc9dee8f3b3e7\Psr\Log;

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
    public function setLogger(\_PhpScoperc9dee8f3b3e7\Psr\Log\LoggerInterface $logger);
}
