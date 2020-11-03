<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4c089bfbbc1b\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoper4c089bfbbc1b\Symfony\Component\HttpFoundation\Request;
use _PhpScoper4c089bfbbc1b\Symfony\Component\HttpFoundation\Response;
/**
 * AjaxDataCollector.
 *
 * @author Bart van den Burg <bart@burgov.nl>
 *
 * @final
 */
class AjaxDataCollector extends \_PhpScoper4c089bfbbc1b\Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    public function collect(\_PhpScoper4c089bfbbc1b\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper4c089bfbbc1b\Symfony\Component\HttpFoundation\Response $response, \Throwable $exception = null)
    {
        // all collecting is done client side
    }
    public function reset()
    {
        // all collecting is done client side
    }
    public function getName()
    {
        return 'ajax';
    }
}
