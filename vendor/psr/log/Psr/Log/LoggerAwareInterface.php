<?php

namespace _PhpScoper6b92aa0ec16f\Psr\Log;

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
    public function setLogger(\_PhpScoper6b92aa0ec16f\Psr\Log\LoggerInterface $logger);
}
