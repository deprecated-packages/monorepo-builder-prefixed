<?php

namespace _PhpScoperbb737891eded\Psr\Log;

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
    public function setLogger(\_PhpScoperbb737891eded\Psr\Log\LoggerInterface $logger);
}
