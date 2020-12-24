<?php

namespace _PhpScoper540e5a7ff813\Psr\Log;

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
    public function setLogger(\_PhpScoper540e5a7ff813\Psr\Log\LoggerInterface $logger);
}
