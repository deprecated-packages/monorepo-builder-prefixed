<?php

namespace _PhpScoper131024327b3f\Psr\Log;

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
    public function setLogger(\_PhpScoper131024327b3f\Psr\Log\LoggerInterface $logger);
}
