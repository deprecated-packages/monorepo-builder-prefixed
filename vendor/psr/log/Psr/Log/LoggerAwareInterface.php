<?php

namespace _PhpScopera4d786bbd33f\Psr\Log;

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
    public function setLogger(\_PhpScopera4d786bbd33f\Psr\Log\LoggerInterface $logger);
}
