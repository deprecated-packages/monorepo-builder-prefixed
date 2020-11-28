<?php

namespace _PhpScoperbe77f3b0e77d\Psr\Log;

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
    public function setLogger(\_PhpScoperbe77f3b0e77d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
