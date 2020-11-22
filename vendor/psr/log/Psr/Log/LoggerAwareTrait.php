<?php

namespace _PhpScoper51570eac51fe\Psr\Log;

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
    public function setLogger(\_PhpScoper51570eac51fe\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
