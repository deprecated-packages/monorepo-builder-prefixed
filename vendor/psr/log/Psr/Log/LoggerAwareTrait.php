<?php

namespace _PhpScoper80b6fe7627f7\Psr\Log;

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
    public function setLogger(\_PhpScoper80b6fe7627f7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
