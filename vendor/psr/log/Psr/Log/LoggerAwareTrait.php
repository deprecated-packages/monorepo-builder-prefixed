<?php

namespace _PhpScoper503cab241f82\Psr\Log;

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
    public function setLogger(\_PhpScoper503cab241f82\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
