<?php

namespace _PhpScopere10afbb60721\Psr\Log;

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
    public function setLogger(\_PhpScopere10afbb60721\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
