<?php

namespace _PhpScoper6f057cf7ca7c\Psr\Log;

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
    public function setLogger(\_PhpScoper6f057cf7ca7c\Psr\Log\LoggerInterface $logger);
}
