<?php

namespace _PhpScoperc86a79e2d6b2\Psr\Log;

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
    public function setLogger(\_PhpScoperc86a79e2d6b2\Psr\Log\LoggerInterface $logger);
}
