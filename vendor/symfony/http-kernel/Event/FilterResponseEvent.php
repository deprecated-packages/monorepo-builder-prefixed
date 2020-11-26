<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\Event;

use _PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Request;
use _PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Response;
use _PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use ResponseEvent instead
 */
class FilterResponseEvent extends \_PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Request $request, int $requestType, \_PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->setResponse($response);
    }
    /**
     * Returns the current response object.
     *
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
    /**
     * Sets a new response object.
     */
    public function setResponse(\_PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Response $response)
    {
        $this->response = $response;
    }
}
