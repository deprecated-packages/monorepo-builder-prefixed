<?php

namespace _PhpScoperbecbc4cd500f\Psr\Log;

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
    public function setLogger(\_PhpScoperbecbc4cd500f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
