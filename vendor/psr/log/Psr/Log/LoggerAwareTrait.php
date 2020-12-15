<?php

namespace _PhpScopere1b4619561f2\Psr\Log;

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
    public function setLogger(\_PhpScopere1b4619561f2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
