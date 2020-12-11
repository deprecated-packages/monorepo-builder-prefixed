<?php

namespace _PhpScoper9a38f5ee6cbc\Psr\Log;

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
    public function setLogger(\_PhpScoper9a38f5ee6cbc\Psr\Log\LoggerInterface $logger);
}
