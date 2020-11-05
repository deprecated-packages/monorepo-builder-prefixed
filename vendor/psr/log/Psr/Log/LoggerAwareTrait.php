<?php

namespace _PhpScoper8aa7c2bece07\Psr\Log;

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
    public function setLogger(\_PhpScoper8aa7c2bece07\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
