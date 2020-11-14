<?php

namespace _PhpScopera2f1d1d42b88\Psr\Log;

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
    public function setLogger(\_PhpScopera2f1d1d42b88\Psr\Log\LoggerInterface $logger);
}
