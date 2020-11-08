<?php

namespace _PhpScoper3c46f40844ed\Psr\Log;

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
    public function setLogger(\_PhpScoper3c46f40844ed\Psr\Log\LoggerInterface $logger);
}
