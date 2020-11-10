<?php

namespace _PhpScoper31b05558ad5c\Psr\Log;

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
    public function setLogger(\_PhpScoper31b05558ad5c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
