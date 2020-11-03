<?php

namespace _PhpScoper437fa56c88e1\Psr\Log;

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
    public function setLogger(\_PhpScoper437fa56c88e1\Psr\Log\LoggerInterface $logger);
}
