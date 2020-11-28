<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\HttpCache;

use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response;
interface SurrogateInterface
{
    /**
     * Returns surrogate name.
     *
     * @return string
     */
    public function getName();
    /**
     * Returns a new cache strategy instance.
     *
     * @return ResponseCacheStrategyInterface A ResponseCacheStrategyInterface instance
     */
    public function createCacheStrategy();
    /**
     * Checks that at least one surrogate has Surrogate capability.
     *
     * @return bool true if one surrogate has Surrogate capability, false otherwise
     */
    public function hasSurrogateCapability(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request $request);
    /**
     * Adds Surrogate-capability to the given Request.
     */
    public function addSurrogateCapability(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request $request);
    /**
     * Adds HTTP headers to specify that the Response needs to be parsed for Surrogate.
     *
     * This method only adds an Surrogate HTTP header if the Response has some Surrogate tags.
     */
    public function addSurrogateControl(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response $response);
    /**
     * Checks that the Response needs to be parsed for Surrogate tags.
     *
     * @return bool true if the Response needs to be parsed, false otherwise
     */
    public function needsParsing(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response $response);
    /**
     * Renders a Surrogate tag.
     *
     * @param string $uri          A URI
     * @param string $alt          An alternate URI
     * @param bool   $ignoreErrors Whether to ignore errors or not
     * @param string $comment      A comment to add as an esi:include tag
     *
     * @return string
     */
    public function renderIncludeTag($uri, $alt = null, $ignoreErrors = \true, $comment = '');
    /**
     * Replaces a Response Surrogate tags with the included resource content.
     *
     * @return Response
     */
    public function process(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Response $response);
    /**
     * Handles a Surrogate from the cache.
     *
     * @param string $uri          The main URI
     * @param string $alt          An alternative URI
     * @param bool   $ignoreErrors Whether to ignore errors or not
     *
     * @return string
     *
     * @throws \RuntimeException
     * @throws \Exception
     */
    public function handle(\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\HttpCache\HttpCache $cache, $uri, $alt, $ignoreErrors);
}
