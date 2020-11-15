<?php

namespace _PhpScoper4a734d287afc\Psr\Log;

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
    public function setLogger(\_PhpScoper4a734d287afc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
