<?php

namespace _PhpScoperb2257feafd7d\Psr\Log;

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
    public function setLogger(\_PhpScoperb2257feafd7d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
