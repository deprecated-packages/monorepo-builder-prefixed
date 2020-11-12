<?php

namespace _PhpScoperad3f32c1b87c\Psr\Log;

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
    public function setLogger(\_PhpScoperad3f32c1b87c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
