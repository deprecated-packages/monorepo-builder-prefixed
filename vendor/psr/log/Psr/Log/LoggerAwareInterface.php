<?php

namespace _PhpScoper7b254e6a7108\Psr\Log;

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
    public function setLogger(\_PhpScoper7b254e6a7108\Psr\Log\LoggerInterface $logger);
}
