<?php

namespace _PhpScoper4f38ae1287f3\Psr\Log;

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
    public function setLogger(\_PhpScoper4f38ae1287f3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
