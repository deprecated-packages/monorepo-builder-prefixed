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
use _PhpScoperabb8c88e9df1\Symfony\Contracts\Service\ResetInterface;
/**
 * DataCollectorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DataCollectorInterface extends \_PhpScoperabb8c88e9df1\Symfony\Contracts\Service\ResetInterface
{
    /**
     * Collects data for the given Request and Response.
     */
    public function collect(\_PhpScoperabb8c88e9df1\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperabb8c88e9df1\Symfony\Component\HttpFoundation\Response $response, \Throwable $exception = null);
    /**
     * Returns the name of the collector.
     *
     * @return string The collector name
     */
    public function getName();
}
