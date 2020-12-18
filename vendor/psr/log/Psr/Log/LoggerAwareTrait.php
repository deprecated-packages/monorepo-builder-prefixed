<?php

namespace _PhpScoper0ce3ac6864aa\Psr\Log;

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
    public function setLogger(\_PhpScoper0ce3ac6864aa\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
