<?php

namespace _PhpScoper14531b498d75\Psr\Log;

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
    public function setLogger(\_PhpScoper14531b498d75\Psr\Log\LoggerInterface $logger);
}
