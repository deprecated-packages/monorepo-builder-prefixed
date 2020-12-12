<?php

namespace _PhpScoper9ce838b06e67\Psr\Log;

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
    public function setLogger(\_PhpScoper9ce838b06e67\Psr\Log\LoggerInterface $logger);
}
