<?php

namespace _PhpScoperbecbc4cd500f\Psr\Log;

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
    public function setLogger(\_PhpScoperbecbc4cd500f\Psr\Log\LoggerInterface $logger);
}
