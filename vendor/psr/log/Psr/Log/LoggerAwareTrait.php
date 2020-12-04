<?php

namespace _PhpScoper56e9de378e59\Psr\Log;

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
    public function setLogger(\_PhpScoper56e9de378e59\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
