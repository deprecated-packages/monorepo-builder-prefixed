<?php

namespace _PhpScoper717b2838a41b\Psr\Log;

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
    public function setLogger(\_PhpScoper717b2838a41b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
