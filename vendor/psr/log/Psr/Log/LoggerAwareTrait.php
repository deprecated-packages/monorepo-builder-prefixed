<?php

namespace _PhpScoper1411c9dba342\Psr\Log;

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
    public function setLogger(\_PhpScoper1411c9dba342\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
