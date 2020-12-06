<?php

namespace _PhpScoper96a284484937\Psr\Log;

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
    public function setLogger(\_PhpScoper96a284484937\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
