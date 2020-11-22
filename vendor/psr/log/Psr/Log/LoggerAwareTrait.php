<?php

namespace _PhpScoperb3d59f519671\Psr\Log;

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
    public function setLogger(\_PhpScoperb3d59f519671\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
