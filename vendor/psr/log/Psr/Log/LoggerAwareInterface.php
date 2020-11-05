<?php

namespace _PhpScoper3ac0b040c6af\Psr\Log;

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
    public function setLogger(\_PhpScoper3ac0b040c6af\Psr\Log\LoggerInterface $logger);
}
