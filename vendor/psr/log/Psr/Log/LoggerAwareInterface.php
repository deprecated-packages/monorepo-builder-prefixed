<?php

namespace _PhpScoperfdd2db5e123d\Psr\Log;

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
    public function setLogger(\_PhpScoperfdd2db5e123d\Psr\Log\LoggerInterface $logger);
}
