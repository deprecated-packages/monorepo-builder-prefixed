<?php

namespace _PhpScoperb2067b9f36f8\Psr\Log;

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
    public function setLogger(\_PhpScoperb2067b9f36f8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
