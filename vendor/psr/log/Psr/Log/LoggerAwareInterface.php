<?php

namespace _PhpScoper9e8360c7485e\Psr\Log;

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
    public function setLogger(\_PhpScoper9e8360c7485e\Psr\Log\LoggerInterface $logger);
}
