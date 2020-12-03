<?php

namespace _PhpScoper6c30e6f631ea\Psr\Log;

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
    public function setLogger(\_PhpScoper6c30e6f631ea\Psr\Log\LoggerInterface $logger);
}
