<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperec2b815193b4\Symfony\Component\HttpKernel\Event;

use _PhpScoperec2b815193b4\Symfony\Component\HttpFoundation\Request;
use _PhpScoperec2b815193b4\Symfony\Component\HttpFoundation\Response;
use _PhpScoperec2b815193b4\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use ResponseEvent instead
 */
class FilterResponseEvent extends \_PhpScoperec2b815193b4\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperec2b815193b4\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperec2b815193b4\Symfony\Component\HttpFoundation\Request $request, int $requestType, \_PhpScoperec2b815193b4\Symfony\Component\HttpFoundation\Response $response)
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
    public function setResponse(\_PhpScoperec2b815193b4\Symfony\Component\HttpFoundation\Response $response)
    {
        $this->response = $response;
    }
}
