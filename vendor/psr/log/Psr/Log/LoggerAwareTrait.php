<?php

namespace _PhpScoperda849baa4a45\Psr\Log;

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
    public function setLogger(\_PhpScoperda849baa4a45\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
