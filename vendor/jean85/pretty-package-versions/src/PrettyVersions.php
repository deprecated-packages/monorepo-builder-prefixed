<?php

namespace _PhpScoperba481e4bff85\Jean85;

use _PhpScoperba481e4bff85\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperba481e4bff85\Jean85\Version
    {
        return new \_PhpScoperba481e4bff85\Jean85\Version($packageName, \_PhpScoperba481e4bff85\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperba481e4bff85\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperba481e4bff85\Jean85\Version
    {
        return self::getVersion(\_PhpScoperba481e4bff85\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
