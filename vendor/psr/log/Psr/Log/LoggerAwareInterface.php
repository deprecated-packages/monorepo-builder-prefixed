<?php

namespace _PhpScoper130e101f3ca6\Psr\Log;

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
    public function setLogger(\_PhpScoper130e101f3ca6\Psr\Log\LoggerInterface $logger);
}
