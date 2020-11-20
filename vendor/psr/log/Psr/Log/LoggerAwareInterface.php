<?php

namespace _PhpScoper7ef219076398\Psr\Log;

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
    public function setLogger(\_PhpScoper7ef219076398\Psr\Log\LoggerInterface $logger);
}
