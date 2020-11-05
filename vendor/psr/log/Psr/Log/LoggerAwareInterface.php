<?php

namespace _PhpScoperf78d2b40800e\Psr\Log;

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
    public function setLogger(\_PhpScoperf78d2b40800e\Psr\Log\LoggerInterface $logger);
}
