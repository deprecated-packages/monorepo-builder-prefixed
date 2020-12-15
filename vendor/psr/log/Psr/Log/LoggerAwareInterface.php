<?php

namespace _PhpScoper345e6b5f632f\Psr\Log;

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
    public function setLogger(\_PhpScoper345e6b5f632f\Psr\Log\LoggerInterface $logger);
}
