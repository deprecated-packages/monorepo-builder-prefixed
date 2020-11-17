<?php

namespace _PhpScoper55b61aca61e8\Psr\Log;

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
    public function setLogger(\_PhpScoper55b61aca61e8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
