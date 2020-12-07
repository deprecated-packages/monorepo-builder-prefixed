<?php

namespace _PhpScoperdab52924cf3e\Psr\Log;

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
    public function setLogger(\_PhpScoperdab52924cf3e\Psr\Log\LoggerInterface $logger);
}
