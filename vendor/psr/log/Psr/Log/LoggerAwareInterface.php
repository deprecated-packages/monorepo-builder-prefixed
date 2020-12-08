<?php

namespace _PhpScoper3c875050d97b\Psr\Log;

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
    public function setLogger(\_PhpScoper3c875050d97b\Psr\Log\LoggerInterface $logger);
}
