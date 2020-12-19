<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere71835ca1415\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere71835ca1415\PharIo\Version\Version
    {
        return new \_PhpScopere71835ca1415\PharIo\Version\Version($version);
    }
}
