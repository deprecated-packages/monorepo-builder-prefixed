<?php

namespace _PhpScoper905a278e297d\Psr\Log;

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
    public function setLogger(\_PhpScoper905a278e297d\Psr\Log\LoggerInterface $logger);
}
