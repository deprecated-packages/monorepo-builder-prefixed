<?php

namespace _PhpScoperd2185c67a4b4\Psr\Log;

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
    public function setLogger(\_PhpScoperd2185c67a4b4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
