<?php

namespace _PhpScoper3c696cbcc510\Psr\Log;

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
    public function setLogger(\_PhpScoper3c696cbcc510\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
