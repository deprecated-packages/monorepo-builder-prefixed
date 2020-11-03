<?php

namespace _PhpScoper138e2990dbdb\Psr\Log;

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
    public function setLogger(\_PhpScoper138e2990dbdb\Psr\Log\LoggerInterface $logger);
}
