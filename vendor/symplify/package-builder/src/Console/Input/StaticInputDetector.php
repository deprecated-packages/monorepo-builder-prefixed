<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Input;

use _PhpScoper96a284484937\Symfony\Component\Console\Input\ArgvInput;
class StaticInputDetector
{
    public static function isDebug() : bool
    {
        $argvInput = new \_PhpScoper96a284484937\Symfony\Component\Console\Input\ArgvInput();
        return $argvInput->hasParameterOption(['--debug', '-v', '-vv', '-vvv']);
    }
}
