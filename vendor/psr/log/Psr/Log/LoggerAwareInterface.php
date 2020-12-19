<?php

namespace _PhpScoper184bc0c88d68\Psr\Log;

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
    public function setLogger(\_PhpScoper184bc0c88d68\Psr\Log\LoggerInterface $logger);
}
