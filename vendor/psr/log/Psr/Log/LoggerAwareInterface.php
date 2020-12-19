<?php

namespace _PhpScopere10afbb60721\Psr\Log;

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
    public function setLogger(\_PhpScopere10afbb60721\Psr\Log\LoggerInterface $logger);
}
