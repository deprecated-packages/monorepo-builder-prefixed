<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera42d72b2de70\Symfony\Component\HttpKernel\Event;

use _PhpScopera42d72b2de70\Symfony\Component\HttpFoundation\Request;
use _PhpScopera42d72b2de70\Symfony\Component\HttpFoundation\Response;
use _PhpScopera42d72b2de70\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Allows to execute logic after a response was sent.
 *
 * Since it's only triggered on master requests, the `getRequestType()` method
 * will always return the value of `HttpKernelInterface::MASTER_REQUEST`.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
final class TerminateEvent extends \_PhpScopera42d72b2de70\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScopera42d72b2de70\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScopera42d72b2de70\Symfony\Component\HttpFoundation\Request $request, \_PhpScopera42d72b2de70\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScopera42d72b2de70\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
        $this->response = $response;
    }
    public function getResponse() : \_PhpScopera42d72b2de70\Symfony\Component\HttpFoundation\Response
    {
        return $this->response;
    }
}
