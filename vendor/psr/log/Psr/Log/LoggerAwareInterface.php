<?php

namespace _PhpScoper6cc1788cdd91\Psr\Log;

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
    public function setLogger(\_PhpScoper6cc1788cdd91\Psr\Log\LoggerInterface $logger);
}
