<?php

namespace _PhpScoper0c743797b8e7\Psr\Log;

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
    public function setLogger(\_PhpScoper0c743797b8e7\Psr\Log\LoggerInterface $logger);
}
