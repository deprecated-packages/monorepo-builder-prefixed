<?php

namespace _PhpScoperd659a053ca1c\Psr\Log;

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
    public function setLogger(\_PhpScoperd659a053ca1c\Psr\Log\LoggerInterface $logger);
}
