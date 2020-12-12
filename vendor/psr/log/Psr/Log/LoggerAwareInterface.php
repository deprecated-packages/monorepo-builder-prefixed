<?php

namespace _PhpScoper0087e037e0f7\Psr\Log;

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
    public function setLogger(\_PhpScoper0087e037e0f7\Psr\Log\LoggerInterface $logger);
}
