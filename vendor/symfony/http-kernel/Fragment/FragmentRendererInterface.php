<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\Fragment;

use _PhpScoper43a95e2f69bc\Symfony\Component\HttpFoundation\Request;
use _PhpScoper43a95e2f69bc\Symfony\Component\HttpFoundation\Response;
use _PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\Controller\ControllerReference;
/**
 * Interface implemented by all rendering strategies.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface FragmentRendererInterface
{
    /**
     * Renders a URI and returns the Response content.
     *
     * @param string|ControllerReference $uri A URI as a string or a ControllerReference instance
     *
     * @return Response A Response instance
     */
    public function render($uri, \_PhpScoper43a95e2f69bc\Symfony\Component\HttpFoundation\Request $request, array $options = []);
    /**
     * Gets the name of the strategy.
     *
     * @return string The strategy name
     */
    public function getName();
}
