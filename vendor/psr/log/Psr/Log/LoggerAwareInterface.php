<?php

namespace _PhpScoperd9ee792cdaf4\Psr\Log;

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
    public function setLogger(\_PhpScoperd9ee792cdaf4\Psr\Log\LoggerInterface $logger);
}
