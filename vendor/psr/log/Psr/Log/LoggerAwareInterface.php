<?php

namespace _PhpScoperad5317739bda\Psr\Log;

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
    public function setLogger(\_PhpScoperad5317739bda\Psr\Log\LoggerInterface $logger);
}
