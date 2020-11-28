<?php

namespace _PhpScoperbe77f3b0e77d\Psr\Log;

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
    public function setLogger(\_PhpScoperbe77f3b0e77d\Psr\Log\LoggerInterface $logger);
}
