<?php

namespace _PhpScoperc8aee0bf0015\Psr\Log;

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
    public function setLogger(\_PhpScoperc8aee0bf0015\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
