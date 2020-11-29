<?php

namespace _PhpScoper9ca278c9ad44\Psr\Log;

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
    public function setLogger(\_PhpScoper9ca278c9ad44\Psr\Log\LoggerInterface $logger);
}
