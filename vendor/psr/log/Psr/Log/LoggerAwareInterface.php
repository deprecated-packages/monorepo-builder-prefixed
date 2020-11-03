<?php

namespace _PhpScoper1600de59048a\Psr\Log;

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
    public function setLogger(\_PhpScoper1600de59048a\Psr\Log\LoggerInterface $logger);
}
