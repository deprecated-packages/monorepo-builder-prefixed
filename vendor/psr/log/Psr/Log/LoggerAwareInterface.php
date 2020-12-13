<?php

namespace _PhpScoper3fb9389c704a\Psr\Log;

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
    public function setLogger(\_PhpScoper3fb9389c704a\Psr\Log\LoggerInterface $logger);
}
