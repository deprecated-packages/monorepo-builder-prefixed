<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb1086ecf2bcb\Symfony\Component\HttpKernel\Event;

use _PhpScoperb1086ecf2bcb\Symfony\Component\HttpFoundation\Request;
use _PhpScoperb1086ecf2bcb\Symfony\Component\HttpFoundation\Response;
use _PhpScoperb1086ecf2bcb\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScoperb1086ecf2bcb\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperb1086ecf2bcb\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperb1086ecf2bcb\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperb1086ecf2bcb\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScoperb1086ecf2bcb\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
        $this->response = $response;
    }
    /**
     * Returns the response for which this event was thrown.
     *
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
