<?php

namespace _PhpScopere9939b84e968\Psr\Log;

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
    public function setLogger(\_PhpScopere9939b84e968\Psr\Log\LoggerInterface $logger);
}
