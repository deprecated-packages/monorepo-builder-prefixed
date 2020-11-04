<?php

namespace _PhpScoperce084f4275dd\Psr\Log;

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
    public function setLogger(\_PhpScoperce084f4275dd\Psr\Log\LoggerInterface $logger);
}
