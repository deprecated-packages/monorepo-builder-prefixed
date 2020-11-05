<?php

namespace _PhpScoper717b2838a41b\Psr\Log;

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
    public function setLogger(\_PhpScoper717b2838a41b\Psr\Log\LoggerInterface $logger);
}
