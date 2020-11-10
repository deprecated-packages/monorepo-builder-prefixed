<?php

namespace _PhpScopera2bd9a9af620\Psr\Log;

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
    public function setLogger(\_PhpScopera2bd9a9af620\Psr\Log\LoggerInterface $logger);
}
