<?php

namespace _PhpScoperdf352df6d893\Psr\Log;

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
    public function setLogger(\_PhpScoperdf352df6d893\Psr\Log\LoggerInterface $logger);
}
