<?php

namespace _PhpScoper8e5d8d76215d\Psr\Log;

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
    public function setLogger(\_PhpScoper8e5d8d76215d\Psr\Log\LoggerInterface $logger);
}
