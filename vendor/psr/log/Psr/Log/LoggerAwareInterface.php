<?php

namespace _PhpScoper80b6fe7627f7\Psr\Log;

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
    public function setLogger(\_PhpScoper80b6fe7627f7\Psr\Log\LoggerInterface $logger);
}
