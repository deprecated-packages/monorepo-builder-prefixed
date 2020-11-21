<?php

namespace _PhpScoperbc89827b806f\Psr\Log;

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
    public function setLogger(\_PhpScoperbc89827b806f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
