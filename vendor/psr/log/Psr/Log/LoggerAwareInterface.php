<?php

namespace _PhpScopere7b233920bf2\Psr\Log;

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
    public function setLogger(\_PhpScopere7b233920bf2\Psr\Log\LoggerInterface $logger);
}
