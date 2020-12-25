<?php

namespace _PhpScoperf0aae7819675\Psr\Log;

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
    public function setLogger(\_PhpScoperf0aae7819675\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
