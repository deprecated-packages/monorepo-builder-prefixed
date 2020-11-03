<?php

namespace _PhpScoperddf2171d3d2c\Psr\Log;

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
    public function setLogger(\_PhpScoperddf2171d3d2c\Psr\Log\LoggerInterface $logger);
}
