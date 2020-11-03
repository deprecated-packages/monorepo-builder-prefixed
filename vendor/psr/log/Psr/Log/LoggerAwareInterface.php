<?php

namespace _PhpScopera42d72b2de70\Psr\Log;

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
    public function setLogger(\_PhpScopera42d72b2de70\Psr\Log\LoggerInterface $logger);
}
