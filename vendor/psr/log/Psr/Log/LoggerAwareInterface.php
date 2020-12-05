<?php

namespace _PhpScoper722a1d9fee2c\Psr\Log;

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
    public function setLogger(\_PhpScoper722a1d9fee2c\Psr\Log\LoggerInterface $logger);
}
