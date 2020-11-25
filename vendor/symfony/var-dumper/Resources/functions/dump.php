<?php

namespace _PhpScopereaa2cae8e093;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScopereaa2cae8e093\Symfony\Component\VarDumper\VarDumper;
if (!\function_exists('_PhpScopereaa2cae8e093\\dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        \_PhpScopereaa2cae8e093\Symfony\Component\VarDumper\VarDumper::dump($var);
        foreach ($moreVars as $v) {
            \_PhpScopereaa2cae8e093\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        if (1 < \func_num_args()) {
            return \func_get_args();
        }
        return $var;
    }
}
if (!\function_exists('_PhpScopereaa2cae8e093\\dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            \_PhpScopereaa2cae8e093\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        die(1);
    }
}
