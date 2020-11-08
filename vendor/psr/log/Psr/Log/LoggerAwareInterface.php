<?php

namespace _PhpScoperda849baa4a45\Psr\Log;

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
    public function setLogger(\_PhpScoperda849baa4a45\Psr\Log\LoggerInterface $logger);
}
