<?php

namespace _PhpScopere57ee17947a3\Psr\Log;

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
    public function setLogger(\_PhpScopere57ee17947a3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
