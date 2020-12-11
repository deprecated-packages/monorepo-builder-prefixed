<?php

namespace _PhpScoper204b3b8f3e0d\Psr\Log;

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
    public function setLogger(\_PhpScoper204b3b8f3e0d\Psr\Log\LoggerInterface $logger);
}
