<?php

namespace _PhpScoperec2b815193b4\Psr\Log;

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
    public function setLogger(\_PhpScoperec2b815193b4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
