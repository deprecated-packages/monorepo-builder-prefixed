<?php

namespace _PhpScoperc41e8050ff3f\Psr\Log;

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
    public function setLogger(\_PhpScoperc41e8050ff3f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
