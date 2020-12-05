<?php

namespace _PhpScoper34ecf47f3155\Psr\Log;

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
    public function setLogger(\_PhpScoper34ecf47f3155\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
