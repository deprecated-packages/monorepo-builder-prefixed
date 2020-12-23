<?php

namespace _PhpScopere6d124d1f7ba\Jean85;

use _PhpScopere6d124d1f7ba\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere6d124d1f7ba\Jean85\Version
    {
        return new \_PhpScopere6d124d1f7ba\Jean85\Version($packageName, \_PhpScopere6d124d1f7ba\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere6d124d1f7ba\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere6d124d1f7ba\Jean85\Version
    {
        return self::getVersion(\_PhpScopere6d124d1f7ba\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
