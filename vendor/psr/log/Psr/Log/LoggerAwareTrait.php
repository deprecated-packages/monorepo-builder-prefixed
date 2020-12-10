<?php

namespace _PhpScoper84d68f9a1b63\Psr\Log;

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
    public function setLogger(\_PhpScoper84d68f9a1b63\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
