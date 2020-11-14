<?php

namespace _PhpScoper120e1a259c7c\Psr\Log;

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
    public function setLogger(\_PhpScoper120e1a259c7c\Psr\Log\LoggerInterface $logger);
}
