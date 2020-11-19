<?php

namespace _PhpScoper0d4928f7af97\Psr\Log;

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
    public function setLogger(\_PhpScoper0d4928f7af97\Psr\Log\LoggerInterface $logger);
}
