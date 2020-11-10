<?php

namespace _PhpScoper058a557299a1\Psr\Log;

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
    public function setLogger(\_PhpScoper058a557299a1\Psr\Log\LoggerInterface $logger);
}
