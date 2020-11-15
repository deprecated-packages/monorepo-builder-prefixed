<?php

namespace _PhpScoper4ef7335528ad\Psr\Log;

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
    public function setLogger(\_PhpScoper4ef7335528ad\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
