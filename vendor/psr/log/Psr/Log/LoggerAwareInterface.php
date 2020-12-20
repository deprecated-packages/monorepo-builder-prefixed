<?php

namespace _PhpScoper03a47c44ad4f\Psr\Log;

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
    public function setLogger(\_PhpScoper03a47c44ad4f\Psr\Log\LoggerInterface $logger);
}
