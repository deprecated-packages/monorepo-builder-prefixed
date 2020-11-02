<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperabb8c88e9df1\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperabb8c88e9df1\Symfony\Component\HttpFoundation\Request;
use _PhpScoperabb8c88e9df1\Symfony\Component\HttpFoundation\Response;
/**
 * AjaxDataCollector.
 *
 * @author Bart van den Burg <bart@burgov.nl>
 *
 * @final
 */
class AjaxDataCollector extends \_PhpScoperabb8c88e9df1\Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    public function collect(\_PhpScoperabb8c88e9df1\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperabb8c88e9df1\Symfony\Component\HttpFoundation\Response $response, \Throwable $exception = null)
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
