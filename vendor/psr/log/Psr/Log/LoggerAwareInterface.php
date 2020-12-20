<?php

namespace _PhpScoperb2067b9f36f8\Psr\Log;

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
    public function setLogger(\_PhpScoperb2067b9f36f8\Psr\Log\LoggerInterface $logger);
}
