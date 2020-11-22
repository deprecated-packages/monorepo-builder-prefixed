<?php

namespace _PhpScoperc41e8050ff3f\Psr\Log;

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
    public function setLogger(\_PhpScoperc41e8050ff3f\Psr\Log\LoggerInterface $logger);
}
