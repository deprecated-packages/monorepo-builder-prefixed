<?php

namespace _PhpScoper9a38f5ee6cbc\Psr\Log;

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
    public function setLogger(\_PhpScoper9a38f5ee6cbc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
