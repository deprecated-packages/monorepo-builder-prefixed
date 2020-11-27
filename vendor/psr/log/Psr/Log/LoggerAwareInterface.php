<?php

namespace _PhpScoperaa2560a8a931\Psr\Log;

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
    public function setLogger(\_PhpScoperaa2560a8a931\Psr\Log\LoggerInterface $logger);
}
