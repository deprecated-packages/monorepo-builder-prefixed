<?php

namespace _PhpScoperaff2103cee1d\Psr\Log;

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
    public function setLogger(\_PhpScoperaff2103cee1d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
