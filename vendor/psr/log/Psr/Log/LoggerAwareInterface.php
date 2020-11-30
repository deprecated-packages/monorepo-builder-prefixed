<?php

namespace _PhpScoper6da0ff96db02\Psr\Log;

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
    public function setLogger(\_PhpScoper6da0ff96db02\Psr\Log\LoggerInterface $logger);
}
