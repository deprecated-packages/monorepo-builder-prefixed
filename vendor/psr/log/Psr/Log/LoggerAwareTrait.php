<?php

namespace _PhpScoperdf352df6d893\Psr\Log;

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
    public function setLogger(\_PhpScoperdf352df6d893\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
