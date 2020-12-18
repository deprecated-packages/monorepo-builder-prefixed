<?php

namespace _PhpScopera1d8e0344ecf\Psr\Log;

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
    public function setLogger(\_PhpScopera1d8e0344ecf\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
