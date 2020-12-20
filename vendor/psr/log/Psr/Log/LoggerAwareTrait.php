<?php

namespace _PhpScoper955845c5b45f\Psr\Log;

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
    public function setLogger(\_PhpScoper955845c5b45f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
