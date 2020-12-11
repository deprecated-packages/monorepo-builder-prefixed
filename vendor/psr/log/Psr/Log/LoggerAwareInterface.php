<?php

namespace _PhpScoper654dfdb702e5\Psr\Log;

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
    public function setLogger(\_PhpScoper654dfdb702e5\Psr\Log\LoggerInterface $logger);
}
