<?php

namespace _PhpScoper9e91fe07dbdd\Psr\Log;

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
    public function setLogger(\_PhpScoper9e91fe07dbdd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
