<?php

namespace _PhpScopereb7fcd8f999a\Psr\Log;

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
    public function setLogger(\_PhpScopereb7fcd8f999a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
