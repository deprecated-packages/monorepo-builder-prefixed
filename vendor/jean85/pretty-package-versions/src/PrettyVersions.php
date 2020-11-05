<?php

namespace _PhpScoper3ac0b040c6af\Jean85;

use _PhpScoper3ac0b040c6af\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3ac0b040c6af\Jean85\Version
    {
        return new \_PhpScoper3ac0b040c6af\Jean85\Version($packageName, \_PhpScoper3ac0b040c6af\PackageVersions\Versions::getVersion($packageName));
    }
}
