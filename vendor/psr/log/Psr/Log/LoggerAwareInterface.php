<?php

namespace _PhpScoperd607abf1de8e\Psr\Log;

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
    public function setLogger(\_PhpScoperd607abf1de8e\Psr\Log\LoggerInterface $logger);
}
