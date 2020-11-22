<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera4d786bbd33f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera4d786bbd33f\PharIo\Version\Version
    {
        return new \_PhpScopera4d786bbd33f\PharIo\Version\Version($version);
    }
}
