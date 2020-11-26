<?php

namespace _PhpScoper97d4f3c5628a\Psr\Log;

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
    public function setLogger(\_PhpScoper97d4f3c5628a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
