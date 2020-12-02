<?php

namespace _PhpScoperd410cf9baa15\Psr\Log;

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
    public function setLogger(\_PhpScoperd410cf9baa15\Psr\Log\LoggerInterface $logger);
}
