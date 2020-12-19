<?php

namespace _PhpScoperb0229f14f861\Psr\Log;

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
    public function setLogger(\_PhpScoperb0229f14f861\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
