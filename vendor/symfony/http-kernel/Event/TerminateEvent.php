<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc00d4390f333\Symfony\Component\HttpKernel\Event;

use _PhpScoperc00d4390f333\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc00d4390f333\Symfony\Component\HttpFoundation\Response;
use _PhpScoperc00d4390f333\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Allows to execute logic after a response was sent.
 *
 * Since it's only triggered on master requests, the `getRequestType()` method
 * will always return the value of `HttpKernelInterface::MASTER_REQUEST`.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
final class TerminateEvent extends \_PhpScoperc00d4390f333\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperc00d4390f333\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperc00d4390f333\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperc00d4390f333\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScoperc00d4390f333\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
        $this->response = $response;
    }
    public function getResponse() : \_PhpScoperc00d4390f333\Symfony\Component\HttpFoundation\Response
    {
        return $this->response;
    }
}
