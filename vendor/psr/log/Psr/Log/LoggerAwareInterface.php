<?php

namespace _PhpScoperc8aee0bf0015\Psr\Log;

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
    public function setLogger(\_PhpScoperc8aee0bf0015\Psr\Log\LoggerInterface $logger);
}
