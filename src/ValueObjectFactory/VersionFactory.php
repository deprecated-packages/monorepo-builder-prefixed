<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd04ce6546762\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd04ce6546762\PharIo\Version\Version
    {
        return new \_PhpScoperd04ce6546762\PharIo\Version\Version($version);
    }
}
