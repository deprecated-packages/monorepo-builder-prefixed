<?php

namespace _PhpScoper0217ecc5969a\Psr\Log;

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
    public function setLogger(\_PhpScoper0217ecc5969a\Psr\Log\LoggerInterface $logger);
}
