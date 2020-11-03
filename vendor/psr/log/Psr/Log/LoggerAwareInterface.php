<?php

namespace _PhpScoperb154859e1be7\Psr\Log;

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
    public function setLogger(\_PhpScoperb154859e1be7\Psr\Log\LoggerInterface $logger);
}
