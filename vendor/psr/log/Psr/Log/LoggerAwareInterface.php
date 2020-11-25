<?php

namespace _PhpScoper93a7e58d9dd1\Psr\Log;

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
    public function setLogger(\_PhpScoper93a7e58d9dd1\Psr\Log\LoggerInterface $logger);
}
