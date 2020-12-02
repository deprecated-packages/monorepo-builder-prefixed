<?php

namespace _PhpScoper3c4d71e1434d\Psr\Log;

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
    public function setLogger(\_PhpScoper3c4d71e1434d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
