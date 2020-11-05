<?php

namespace _PhpScoper3ac0b040c6af\Psr\Log;

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
    public function setLogger(\_PhpScoper3ac0b040c6af\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
