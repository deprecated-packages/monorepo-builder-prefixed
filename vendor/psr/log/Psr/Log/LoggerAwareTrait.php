<?php

namespace _PhpScoper3b1a4d12ef28\Psr\Log;

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
    public function setLogger(\_PhpScoper3b1a4d12ef28\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
