<?php

namespace _PhpScoper0f10ad97259b\Jean85;

use _PhpScoper0f10ad97259b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper0f10ad97259b\Jean85\Version
    {
        return new \_PhpScoper0f10ad97259b\Jean85\Version($packageName, \_PhpScoper0f10ad97259b\PackageVersions\Versions::getVersion($packageName));
    }
}
