<?php

namespace _PhpScoper244a857c31f6\Psr\Log;

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
    public function setLogger(\_PhpScoper244a857c31f6\Psr\Log\LoggerInterface $logger);
}
