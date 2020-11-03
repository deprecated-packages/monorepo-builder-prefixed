<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4f6ca029880\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperc4f6ca029880\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc4f6ca029880\Symfony\Component\HttpFoundation\Response;
/**
 * AjaxDataCollector.
 *
 * @author Bart van den Burg <bart@burgov.nl>
 *
 * @final
 */
class AjaxDataCollector extends \_PhpScoperc4f6ca029880\Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    public function collect(\_PhpScoperc4f6ca029880\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperc4f6ca029880\Symfony\Component\HttpFoundation\Response $response, \Throwable $exception = null)
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
