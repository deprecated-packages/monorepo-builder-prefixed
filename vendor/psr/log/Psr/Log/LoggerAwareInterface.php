<?php

namespace _PhpScopere71835ca1415\Psr\Log;

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
    public function setLogger(\_PhpScopere71835ca1415\Psr\Log\LoggerInterface $logger);
}
