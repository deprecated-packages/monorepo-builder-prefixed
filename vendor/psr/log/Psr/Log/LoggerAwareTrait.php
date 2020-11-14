<?php

namespace _PhpScoperb2110b0b3130\Psr\Log;

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
    public function setLogger(\_PhpScoperb2110b0b3130\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
