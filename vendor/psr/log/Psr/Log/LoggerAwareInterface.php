<?php

namespace _PhpScoperafeb7177e88e\Psr\Log;

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
    public function setLogger(\_PhpScoperafeb7177e88e\Psr\Log\LoggerInterface $logger);
}
