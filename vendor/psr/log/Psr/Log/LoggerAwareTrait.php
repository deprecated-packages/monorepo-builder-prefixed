<?php

namespace _PhpScoper79999b045682\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper79999b045682\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
