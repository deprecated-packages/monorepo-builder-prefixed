<?php

namespace _PhpScoperfdd2db5e123d\Jean85;

use _PhpScoperfdd2db5e123d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfdd2db5e123d\Jean85\Version
    {
        return new \_PhpScoperfdd2db5e123d\Jean85\Version($packageName, \_PhpScoperfdd2db5e123d\PackageVersions\Versions::getVersion($packageName));
    }
}
