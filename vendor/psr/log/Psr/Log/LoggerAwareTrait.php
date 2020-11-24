<?php

namespace _PhpScoper641780a4edd2\Psr\Log;

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
    public function setLogger(\_PhpScoper641780a4edd2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
