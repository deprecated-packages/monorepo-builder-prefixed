<?php

namespace _PhpScoperb9e77befe692\Psr\Log;

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
    public function setLogger(\_PhpScoperb9e77befe692\Psr\Log\LoggerInterface $logger);
}
