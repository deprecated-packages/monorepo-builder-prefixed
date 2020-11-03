<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper87c95ce1b4e5\Symfony\Component\HttpKernel\Log;

use _PhpScoper87c95ce1b4e5\Symfony\Component\HttpFoundation\Request;
/**
 * DebugLoggerInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DebugLoggerInterface
{
    /**
     * Returns an array of logs.
     *
     * A log is an array with the following mandatory keys:
     * timestamp, message, priority, and priorityName.
     * It can also have an optional context key containing an array.
     *
     * @return array An array of logs
     */
    public function getLogs(\_PhpScoper87c95ce1b4e5\Symfony\Component\HttpFoundation\Request $request = null);
    /**
     * Returns the number of errors.
     *
     * @return int The number of errors
     */
    public function countErrors(\_PhpScoper87c95ce1b4e5\Symfony\Component\HttpFoundation\Request $request = null);
    /**
     * Removes all log records.
     */
    public function clear();
}
