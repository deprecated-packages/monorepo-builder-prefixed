<?php

namespace _PhpScoper9fc59dd81894\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper9fc59dd81894\Psr\Log\LoggerInterface $logger);
}
