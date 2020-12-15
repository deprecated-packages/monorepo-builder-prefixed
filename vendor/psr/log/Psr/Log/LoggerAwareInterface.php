<?php

namespace _PhpScopere1b4619561f2\Psr\Log;

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
    public function setLogger(\_PhpScopere1b4619561f2\Psr\Log\LoggerInterface $logger);
}
