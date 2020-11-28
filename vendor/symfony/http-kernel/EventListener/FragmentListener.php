<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperbe77f3b0e77d\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\UriSigner;
/**
 * Handles content fragments represented by special URIs.
 *
 * All URL paths starting with /_fragment are handled as
 * content fragments by this listener.
 *
 * Throws an AccessDeniedHttpException exception if the request
 * is not signed or if it is not an internal sub-request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class FragmentListener implements \_PhpScoperbe77f3b0e77d\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $signer;
    private $fragmentPath;
    /**
     * @param string $fragmentPath The path that triggers this listener
     */
    public function __construct(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\UriSigner $signer, string $fragmentPath = '/_fragment')
    {
        $this->signer = $signer;
        $this->fragmentPath = $fragmentPath;
    }
    /**
     * Fixes request attributes when the path is '/_fragment'.
     *
     * @throws AccessDeniedHttpException if the request does not come from a trusted IP
     */
    public function onKernelRequest(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        $request = $event->getRequest();
        if ($this->fragmentPath !== \rawurldecode($request->getPathInfo())) {
            return;
        }
        if ($request->attributes->has('_controller')) {
            // Is a sub-request: no need to parse _path but it should still be removed from query parameters as below.
            $request->query->remove('_path');
            return;
        }
        if ($event->isMasterRequest()) {
            $this->validateRequest($request);
        }
        \parse_str($request->query->get('_path', ''), $attributes);
        $request->attributes->add($attributes);
        $request->attributes->set('_route_params', \array_replace($request->attributes->get('_route_params', []), $attributes));
        $request->query->remove('_path');
    }
    protected function validateRequest(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request $request)
    {
        // is the Request safe?
        if (!$request->isMethodSafe()) {
            throw new \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
        }
        // is the Request signed?
        // we cannot use $request->getUri() here as we want to work with the original URI (no query string reordering)
        if ($this->signer->check($request->getSchemeAndHttpHost() . $request->getBaseUrl() . $request->getPathInfo() . (null !== ($qs = $request->server->get('QUERY_STRING')) ? '?' . $qs : ''))) {
            return;
        }
        throw new \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [['onKernelRequest', 48]]];
    }
}
