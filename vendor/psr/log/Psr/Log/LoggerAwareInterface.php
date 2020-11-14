<?php

namespace _PhpScopera3f2f7450f99\Psr\Log;

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
    public function setLogger(\_PhpScopera3f2f7450f99\Psr\Log\LoggerInterface $logger);
}
