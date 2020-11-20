<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercdc90a6628b6\Symfony\Component\HttpKernel\Event;

use _PhpScopercdc90a6628b6\Symfony\Component\HttpFoundation\Request;
use _PhpScopercdc90a6628b6\Symfony\Component\HttpFoundation\Response;
use _PhpScopercdc90a6628b6\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScopercdc90a6628b6\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScopercdc90a6628b6\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScopercdc90a6628b6\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercdc90a6628b6\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScopercdc90a6628b6\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
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
