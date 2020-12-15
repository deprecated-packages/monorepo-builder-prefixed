<?php

namespace _PhpScoperc7f1624089a3\Psr\Log;

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
    public function setLogger(\_PhpScoperc7f1624089a3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
