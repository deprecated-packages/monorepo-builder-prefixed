<?php

namespace _PhpScoper1d5917c620d0\Psr\Log;

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
    public function setLogger(\_PhpScoper1d5917c620d0\Psr\Log\LoggerInterface $logger);
}
