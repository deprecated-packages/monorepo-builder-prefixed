<?php

namespace _PhpScopereaa2cae8e093\Psr\Log;

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
    public function setLogger(\_PhpScopereaa2cae8e093\Psr\Log\LoggerInterface $logger);
}
