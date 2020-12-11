<?php

namespace _PhpScoper8f797d20934a\Psr\Log;

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
    public function setLogger(\_PhpScoper8f797d20934a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
