<?php

namespace _PhpScopera1d8e0344ecf\Psr\Log;

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
    public function setLogger(\_PhpScopera1d8e0344ecf\Psr\Log\LoggerInterface $logger);
}
