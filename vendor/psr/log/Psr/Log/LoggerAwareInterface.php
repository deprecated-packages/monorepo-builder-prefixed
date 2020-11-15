<?php

namespace _PhpScoper7606a7c2799b\Psr\Log;

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
    public function setLogger(\_PhpScoper7606a7c2799b\Psr\Log\LoggerInterface $logger);
}
