<?php

namespace _PhpScopereaa086e6f852\Psr\Log;

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
    public function setLogger(\_PhpScopereaa086e6f852\Psr\Log\LoggerInterface $logger);
}
