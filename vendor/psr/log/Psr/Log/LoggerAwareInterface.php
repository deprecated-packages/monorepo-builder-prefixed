<?php

namespace _PhpScoper897dcdb71069\Psr\Log;

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
    public function setLogger(\_PhpScoper897dcdb71069\Psr\Log\LoggerInterface $logger);
}
