<?php

namespace _PhpScoper912e6d747d7e\Psr\Log;

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
    public function setLogger(\_PhpScoper912e6d747d7e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
