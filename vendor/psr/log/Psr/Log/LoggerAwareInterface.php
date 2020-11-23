<?php

namespace _PhpScoperc9dc9dec1b4a\Psr\Log;

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
    public function setLogger(\_PhpScoperc9dc9dec1b4a\Psr\Log\LoggerInterface $logger);
}
