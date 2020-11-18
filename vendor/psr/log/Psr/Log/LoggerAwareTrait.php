<?php

namespace _PhpScoper600b802aef08\Psr\Log;

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
    public function setLogger(\_PhpScoper600b802aef08\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
