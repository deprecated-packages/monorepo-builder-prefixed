<?php

namespace _PhpScoperd924ce906654\Psr\Log;

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
    public function setLogger(\_PhpScoperd924ce906654\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
