<?php

namespace _PhpScoperd2185c67a4b4\Psr\Log;

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
    public function setLogger(\_PhpScoperd2185c67a4b4\Psr\Log\LoggerInterface $logger);
}
