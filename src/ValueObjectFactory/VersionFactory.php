<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere3ed9f66440c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere3ed9f66440c\PharIo\Version\Version
    {
        return new \_PhpScopere3ed9f66440c\PharIo\Version\Version($version);
    }
}
