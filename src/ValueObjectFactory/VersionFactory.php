<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperce084f4275dd\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperce084f4275dd\PharIo\Version\Version
    {
        return new \_PhpScoperce084f4275dd\PharIo\Version\Version($version);
    }
}
