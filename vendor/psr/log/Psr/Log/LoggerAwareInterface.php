<?php

namespace _PhpScoper485f3a9238ad\Psr\Log;

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
    public function setLogger(\_PhpScoper485f3a9238ad\Psr\Log\LoggerInterface $logger);
}
