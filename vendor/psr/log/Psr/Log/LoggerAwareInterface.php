<?php

namespace _PhpScoper37887d2f9246\Psr\Log;

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
    public function setLogger(\_PhpScoper37887d2f9246\Psr\Log\LoggerInterface $logger);
}
