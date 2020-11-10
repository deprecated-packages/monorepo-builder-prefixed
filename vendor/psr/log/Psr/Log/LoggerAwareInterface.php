<?php

namespace _PhpScoper711ac919263f\Psr\Log;

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
    public function setLogger(\_PhpScoper711ac919263f\Psr\Log\LoggerInterface $logger);
}
