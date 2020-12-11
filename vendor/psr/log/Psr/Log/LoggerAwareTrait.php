<?php

namespace _PhpScoperbb737891eded\Psr\Log;

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
    public function setLogger(\_PhpScoperbb737891eded\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
