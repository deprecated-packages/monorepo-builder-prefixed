<?php

namespace _PhpScoper6d6e02e9c455\Psr\Log;

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
    public function setLogger(\_PhpScoper6d6e02e9c455\Psr\Log\LoggerInterface $logger);
}
