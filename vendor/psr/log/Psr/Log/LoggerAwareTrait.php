<?php

namespace _PhpScoper29d04ea58d14\Psr\Log;

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
    public function setLogger(\_PhpScoper29d04ea58d14\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
