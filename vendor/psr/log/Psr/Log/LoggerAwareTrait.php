<?php

namespace _PhpScoper77ed23b49cd3\Psr\Log;

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
    public function setLogger(\_PhpScoper77ed23b49cd3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
