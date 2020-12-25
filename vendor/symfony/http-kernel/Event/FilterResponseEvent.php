<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd04ce6546762\Symfony\Component\HttpKernel\Event;

use _PhpScoperd04ce6546762\Symfony\Component\HttpFoundation\Request;
use _PhpScoperd04ce6546762\Symfony\Component\HttpFoundation\Response;
use _PhpScoperd04ce6546762\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use ResponseEvent instead
 */
class FilterResponseEvent extends \_PhpScoperd04ce6546762\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperd04ce6546762\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperd04ce6546762\Symfony\Component\HttpFoundation\Request $request, int $requestType, \_PhpScoperd04ce6546762\Symfony\Component\HttpFoundation\Response $response)
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
    public function setResponse(\_PhpScoperd04ce6546762\Symfony\Component\HttpFoundation\Response $response)
    {
        $this->response = $response;
    }
}
