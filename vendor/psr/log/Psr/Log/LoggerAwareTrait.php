<?php

namespace _PhpScoper7334003ee560\Psr\Log;

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
    public function setLogger(\_PhpScoper7334003ee560\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
