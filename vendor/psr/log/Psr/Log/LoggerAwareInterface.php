<?php

namespace _PhpScopere4e8aecb81b9\Psr\Log;

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
    public function setLogger(\_PhpScopere4e8aecb81b9\Psr\Log\LoggerInterface $logger);
}
