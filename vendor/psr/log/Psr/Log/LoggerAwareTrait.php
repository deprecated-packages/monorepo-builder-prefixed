<?php

namespace _PhpScoperb9e77befe692\Psr\Log;

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
    public function setLogger(\_PhpScoperb9e77befe692\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
