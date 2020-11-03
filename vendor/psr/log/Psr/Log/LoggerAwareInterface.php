<?php

namespace _PhpScoper57793da194f3\Psr\Log;

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
    public function setLogger(\_PhpScoper57793da194f3\Psr\Log\LoggerInterface $logger);
}
