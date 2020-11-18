<?php

namespace _PhpScoper600b802aef08\Psr\Log;

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
    public function setLogger(\_PhpScoper600b802aef08\Psr\Log\LoggerInterface $logger);
}
