<?php

namespace _PhpScoper650fbdd90fa0\Psr\Log;

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
    public function setLogger(\_PhpScoper650fbdd90fa0\Psr\Log\LoggerInterface $logger);
}
