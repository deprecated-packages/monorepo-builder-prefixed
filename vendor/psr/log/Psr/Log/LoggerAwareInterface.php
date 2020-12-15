<?php

namespace _PhpScoperd79f30a2f8be\Psr\Log;

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
    public function setLogger(\_PhpScoperd79f30a2f8be\Psr\Log\LoggerInterface $logger);
}
