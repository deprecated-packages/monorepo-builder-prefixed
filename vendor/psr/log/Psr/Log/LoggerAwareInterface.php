<?php

namespace _PhpScoper77bdbacdc821\Psr\Log;

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
    public function setLogger(\_PhpScoper77bdbacdc821\Psr\Log\LoggerInterface $logger);
}
