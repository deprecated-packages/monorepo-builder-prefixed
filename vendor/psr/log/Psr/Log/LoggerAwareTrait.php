<?php

namespace _PhpScoperafeb7177e88e\Psr\Log;

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
    public function setLogger(\_PhpScoperafeb7177e88e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
