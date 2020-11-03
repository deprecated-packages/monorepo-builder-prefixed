<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperba481e4bff85\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperba481e4bff85\PharIo\Version\Version
    {
        return new \_PhpScoperba481e4bff85\PharIo\Version\Version($version);
    }
}
