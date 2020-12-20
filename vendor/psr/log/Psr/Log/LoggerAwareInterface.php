<?php

namespace _PhpScoper32df52184457\Psr\Log;

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
    public function setLogger(\_PhpScoper32df52184457\Psr\Log\LoggerInterface $logger);
}
