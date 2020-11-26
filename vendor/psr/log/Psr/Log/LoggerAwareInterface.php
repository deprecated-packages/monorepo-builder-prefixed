<?php

namespace _PhpScoper97d4f3c5628a\Psr\Log;

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
    public function setLogger(\_PhpScoper97d4f3c5628a\Psr\Log\LoggerInterface $logger);
}
