<?php

namespace _PhpScoper8a1d608a1a7e\Psr\Log;

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
    public function setLogger(\_PhpScoper8a1d608a1a7e\Psr\Log\LoggerInterface $logger);
}
