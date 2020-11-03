<?php

namespace _PhpScoper4c089bfbbc1b\Psr\Log;

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
    public function setLogger(\_PhpScoper4c089bfbbc1b\Psr\Log\LoggerInterface $logger);
}
