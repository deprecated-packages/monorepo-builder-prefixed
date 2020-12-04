<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper56e9de378e59\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper56e9de378e59\PharIo\Version\Version
    {
        return new \_PhpScoper56e9de378e59\PharIo\Version\Version($version);
    }
}
