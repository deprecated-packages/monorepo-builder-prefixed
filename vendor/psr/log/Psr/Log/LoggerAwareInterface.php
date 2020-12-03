<?php

namespace _PhpScoper3bda9af7e0fd\Psr\Log;

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
    public function setLogger(\_PhpScoper3bda9af7e0fd\Psr\Log\LoggerInterface $logger);
}
