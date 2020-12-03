<?php

namespace _PhpScoper3bda9af7e0fd\Psr\Log;

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
    public function setLogger(\_PhpScoper3bda9af7e0fd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
