<?php

namespace _PhpScoper8f797d20934a\Psr\Log;

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
    public function setLogger(\_PhpScoper8f797d20934a\Psr\Log\LoggerInterface $logger);
}
