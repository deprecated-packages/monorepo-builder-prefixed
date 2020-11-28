<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event;

use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use ResponseEvent instead
 */
class FilterResponseEvent extends \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request $request, int $requestType, \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response $response)
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
    public function setResponse(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response $response)
    {
        $this->response = $response;
    }
}
