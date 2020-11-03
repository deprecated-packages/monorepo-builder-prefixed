<?php

namespace _PhpScoper15dc67236b17\Psr\Log;

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
    public function setLogger(\_PhpScoper15dc67236b17\Psr\Log\LoggerInterface $logger);
}
