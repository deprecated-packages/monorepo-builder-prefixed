<?php

namespace _PhpScopera1d8e0344ecf;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScopera1d8e0344ecf\Symfony\Component\VarDumper\VarDumper;
if (!\function_exists('_PhpScopera1d8e0344ecf\\dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        \_PhpScopera1d8e0344ecf\Symfony\Component\VarDumper\VarDumper::dump($var);
        foreach ($moreVars as $v) {
            \_PhpScopera1d8e0344ecf\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        if (1 < \func_num_args()) {
            return \func_get_args();
        }
        return $var;
    }
}
if (!\function_exists('_PhpScopera1d8e0344ecf\\dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            \_PhpScopera1d8e0344ecf\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        die(1);
    }
}
