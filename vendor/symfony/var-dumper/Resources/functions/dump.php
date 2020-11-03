<?php

namespace _PhpScoper43a95e2f69bc;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoper43a95e2f69bc\Symfony\Component\VarDumper\VarDumper;
if (!\function_exists('_PhpScoper43a95e2f69bc\\dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        \_PhpScoper43a95e2f69bc\Symfony\Component\VarDumper\VarDumper::dump($var);
        foreach ($moreVars as $v) {
            \_PhpScoper43a95e2f69bc\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        if (1 < \func_num_args()) {
            return \func_get_args();
        }
        return $var;
    }
}
if (!\function_exists('_PhpScoper43a95e2f69bc\\dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            \_PhpScoper43a95e2f69bc\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        exit(1);
    }
}
