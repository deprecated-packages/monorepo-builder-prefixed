<?php

namespace _PhpScoper5a7e73320450\Psr\Log;

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
    public function setLogger(\_PhpScoper5a7e73320450\Psr\Log\LoggerInterface $logger);
}
