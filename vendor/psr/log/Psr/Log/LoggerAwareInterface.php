<?php

namespace _PhpScoper68683f91c63d\Psr\Log;

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
    public function setLogger(\_PhpScoper68683f91c63d\Psr\Log\LoggerInterface $logger);
}
