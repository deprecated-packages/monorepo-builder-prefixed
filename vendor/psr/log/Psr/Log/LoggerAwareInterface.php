<?php

namespace _PhpScoper66a1b4bf441c\Psr\Log;

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
    public function setLogger(\_PhpScoper66a1b4bf441c\Psr\Log\LoggerInterface $logger);
}
