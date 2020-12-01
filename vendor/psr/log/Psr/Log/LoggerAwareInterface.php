<?php

namespace _PhpScoper912e6d747d7e\Psr\Log;

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
    public function setLogger(\_PhpScoper912e6d747d7e\Psr\Log\LoggerInterface $logger);
}
