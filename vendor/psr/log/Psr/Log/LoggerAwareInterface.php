<?php

namespace _PhpScoper12b9214dc5a9\Psr\Log;

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
    public function setLogger(\_PhpScoper12b9214dc5a9\Psr\Log\LoggerInterface $logger);
}
