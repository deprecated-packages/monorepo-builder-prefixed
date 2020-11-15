<?php

namespace _PhpScoper31a2d0e8f655\Psr\Log;

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
    public function setLogger(\_PhpScoper31a2d0e8f655\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
