<?php

namespace _PhpScoperb73fd1606666\Psr\Log;

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
    public function setLogger(\_PhpScoperb73fd1606666\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
