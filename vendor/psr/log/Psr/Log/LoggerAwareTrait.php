<?php

namespace _PhpScoperb0f70d760c3d\Psr\Log;

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
    public function setLogger(\_PhpScoperb0f70d760c3d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
