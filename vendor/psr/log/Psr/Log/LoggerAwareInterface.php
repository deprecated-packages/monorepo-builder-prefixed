<?php

namespace _PhpScoper3c4d71e1434d\Psr\Log;

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
    public function setLogger(\_PhpScoper3c4d71e1434d\Psr\Log\LoggerInterface $logger);
}
