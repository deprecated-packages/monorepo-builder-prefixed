<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere809b8269e19\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere809b8269e19\PharIo\Version\Version
    {
        return new \_PhpScopere809b8269e19\PharIo\Version\Version($version);
    }
}
