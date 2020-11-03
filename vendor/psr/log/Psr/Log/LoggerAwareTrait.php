<?php

namespace _PhpScoper8204af15e2b3\Psr\Log;

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
    public function setLogger(\_PhpScoper8204af15e2b3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
