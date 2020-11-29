<?php

namespace _PhpScoperf4997c409394\Psr\Log;

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
    public function setLogger(\_PhpScoperf4997c409394\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
