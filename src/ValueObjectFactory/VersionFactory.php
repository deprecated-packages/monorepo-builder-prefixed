<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere71e603d103e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere71e603d103e\PharIo\Version\Version
    {
        return new \_PhpScopere71e603d103e\PharIo\Version\Version($version);
    }
}
