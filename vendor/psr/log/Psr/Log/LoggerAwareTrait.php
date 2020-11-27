<?php

namespace _PhpScoperaa2560a8a931\Psr\Log;

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
    public function setLogger(\_PhpScoperaa2560a8a931\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
