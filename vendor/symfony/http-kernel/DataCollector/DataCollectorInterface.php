<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper44d485ef56a2\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoper44d485ef56a2\Symfony\Component\HttpFoundation\Request;
use _PhpScoper44d485ef56a2\Symfony\Component\HttpFoundation\Response;
use _PhpScoper44d485ef56a2\Symfony\Contracts\Service\ResetInterface;
/**
 * DataCollectorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DataCollectorInterface extends \_PhpScoper44d485ef56a2\Symfony\Contracts\Service\ResetInterface
{
    /**
     * Collects data for the given Request and Response.
     *
     * @param \Throwable|null $exception
     */
    public function collect(\_PhpScoper44d485ef56a2\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper44d485ef56a2\Symfony\Component\HttpFoundation\Response $response);
    /**
     * Returns the name of the collector.
     *
     * @return string The collector name
     */
    public function getName();
}
