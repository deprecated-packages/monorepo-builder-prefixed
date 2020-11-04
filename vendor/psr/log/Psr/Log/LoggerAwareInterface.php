<?php

namespace _PhpScoper860bc98a0f96\Psr\Log;

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
    public function setLogger(\_PhpScoper860bc98a0f96\Psr\Log\LoggerInterface $logger);
}
