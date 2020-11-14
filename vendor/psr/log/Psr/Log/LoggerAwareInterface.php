<?php

namespace _PhpScoper5861d582764b\Psr\Log;

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
    public function setLogger(\_PhpScoper5861d582764b\Psr\Log\LoggerInterface $logger);
}
