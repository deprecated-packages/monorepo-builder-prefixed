<?php

namespace _PhpScoper058a557299a1\Psr\Log;

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
    public function setLogger(\_PhpScoper058a557299a1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
