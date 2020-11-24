<?php

namespace _PhpScoper0f23ef1f1d10\Psr\Log;

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
    public function setLogger(\_PhpScoper0f23ef1f1d10\Psr\Log\LoggerInterface $logger);
}
