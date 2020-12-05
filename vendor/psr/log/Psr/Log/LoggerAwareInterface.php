<?php

namespace _PhpScoper9aac61c94bdb\Psr\Log;

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
    public function setLogger(\_PhpScoper9aac61c94bdb\Psr\Log\LoggerInterface $logger);
}
