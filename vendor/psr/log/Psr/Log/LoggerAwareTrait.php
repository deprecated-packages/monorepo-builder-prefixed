<?php

namespace _PhpScoper6cc1788cdd91\Psr\Log;

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
    public function setLogger(\_PhpScoper6cc1788cdd91\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
