<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper68e56c1b5bd9\Symfony\Component\HttpKernel\Event;

use _PhpScoper68e56c1b5bd9\Symfony\Component\EventDispatcher\Event;
use _PhpScoper68e56c1b5bd9\Symfony\Component\HttpFoundation\Request;
use _PhpScoper68e56c1b5bd9\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Base class for events thrown in the HttpKernel component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class KernelEvent extends \_PhpScoper68e56c1b5bd9\Symfony\Component\EventDispatcher\Event
{
    private $kernel;
    private $request;
    private $requestType;
    /**
     * @param int $requestType The request type the kernel is currently processing; one of
     *                         HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST
     */
    public function __construct(\_PhpScoper68e56c1b5bd9\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoper68e56c1b5bd9\Symfony\Component\HttpFoundation\Request $request, ?int $requestType)
    {
        $this->kernel = $kernel;
        $this->request = $request;
        $this->requestType = $requestType;
    }
    /**
     * Returns the kernel in which this event was thrown.
     *
     * @return HttpKernelInterface
     */
    public function getKernel()
    {
        return $this->kernel;
    }
    /**
     * Returns the request the kernel is currently processing.
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Returns the request type the kernel is currently processing.
     *
     * @return int One of HttpKernelInterface::MASTER_REQUEST and
     *             HttpKernelInterface::SUB_REQUEST
     */
    public function getRequestType()
    {
        return $this->requestType;
    }
    /**
     * Checks if this is a master request.
     *
     * @return bool True if the request is a master request
     */
    public function isMasterRequest()
    {
        return \_PhpScoper68e56c1b5bd9\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST === $this->requestType;
    }
}
