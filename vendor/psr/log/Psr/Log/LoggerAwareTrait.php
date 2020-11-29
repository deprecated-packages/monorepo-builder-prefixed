<?php

namespace _PhpScoper8a93e17d4d47\Psr\Log;

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
    public function setLogger(\_PhpScoper8a93e17d4d47\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
