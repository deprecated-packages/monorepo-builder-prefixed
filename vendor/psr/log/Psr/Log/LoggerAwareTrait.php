<?php

namespace _PhpScoperfa13b4bfa005\Psr\Log;

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
    public function setLogger(\_PhpScoperfa13b4bfa005\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
