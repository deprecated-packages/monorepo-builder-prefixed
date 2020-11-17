<?php

namespace _PhpScoperfdd2db5e123d\Psr\Log;

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
    public function setLogger(\_PhpScoperfdd2db5e123d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
