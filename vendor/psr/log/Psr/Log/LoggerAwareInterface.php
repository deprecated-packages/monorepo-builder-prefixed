<?php

namespace _PhpScoper7cc068f3f5d1\Psr\Log;

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
    public function setLogger(\_PhpScoper7cc068f3f5d1\Psr\Log\LoggerInterface $logger);
}
