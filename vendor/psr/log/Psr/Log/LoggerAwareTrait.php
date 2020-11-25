<?php

namespace _PhpScopereaa2cae8e093\Psr\Log;

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
    public function setLogger(\_PhpScopereaa2cae8e093\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
