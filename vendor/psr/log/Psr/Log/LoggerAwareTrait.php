<?php

namespace _PhpScoper931cda798d50\Psr\Log;

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
    public function setLogger(\_PhpScoper931cda798d50\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
