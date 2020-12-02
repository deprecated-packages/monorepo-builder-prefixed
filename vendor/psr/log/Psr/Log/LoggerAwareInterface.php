<?php

namespace _PhpScoper9ea409d355af\Psr\Log;

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
    public function setLogger(\_PhpScoper9ea409d355af\Psr\Log\LoggerInterface $logger);
}
