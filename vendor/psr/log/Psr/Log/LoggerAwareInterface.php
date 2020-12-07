<?php

namespace _PhpScopereb7fcd8f999a\Psr\Log;

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
    public function setLogger(\_PhpScopereb7fcd8f999a\Psr\Log\LoggerInterface $logger);
}
