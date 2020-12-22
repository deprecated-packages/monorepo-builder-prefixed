<?php

namespace _PhpScoper621af75be782\Psr\Log;

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
    public function setLogger(\_PhpScoper621af75be782\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
