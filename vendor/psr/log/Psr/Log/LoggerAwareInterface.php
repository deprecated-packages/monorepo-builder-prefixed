<?php

namespace _PhpScoper12f30d5eda15\Psr\Log;

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
    public function setLogger(\_PhpScoper12f30d5eda15\Psr\Log\LoggerInterface $logger);
}
