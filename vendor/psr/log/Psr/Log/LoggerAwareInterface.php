<?php

namespace _PhpScopera763b4be90d0\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScopera763b4be90d0\Psr\Log\LoggerInterface $logger);
}
