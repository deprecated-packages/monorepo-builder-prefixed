<?php

namespace _PhpScoper12f30d5eda15\Psr\Log;

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
    public function setLogger(\_PhpScoper12f30d5eda15\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
