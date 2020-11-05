<?php

namespace _PhpScoperb445cd48032c\Psr\Log;

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
    public function setLogger(\_PhpScoperb445cd48032c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
