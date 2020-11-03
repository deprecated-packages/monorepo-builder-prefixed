<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperddf2171d3d2c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperddf2171d3d2c\PharIo\Version\Version
    {
        return new \_PhpScoperddf2171d3d2c\PharIo\Version\Version($version);
    }
}
