<?php

namespace _PhpScoper3ceab9fdc42a\Psr\Log;

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
    public function setLogger(\_PhpScoper3ceab9fdc42a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
