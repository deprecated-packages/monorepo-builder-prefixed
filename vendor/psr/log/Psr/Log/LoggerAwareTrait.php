<?php

namespace _PhpScoper76c4aa553101\Psr\Log;

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
    public function setLogger(\_PhpScoper76c4aa553101\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
