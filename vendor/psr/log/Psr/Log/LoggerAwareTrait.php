<?php

namespace _PhpScoper3c875050d97b\Psr\Log;

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
    public function setLogger(\_PhpScoper3c875050d97b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
