<?php

namespace _PhpScoperce084f4275dd\Psr\Log;

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
    public function setLogger(\_PhpScoperce084f4275dd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
