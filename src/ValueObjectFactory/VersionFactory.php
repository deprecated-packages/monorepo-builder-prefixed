<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper654dfdb702e5\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper654dfdb702e5\PharIo\Version\Version
    {
        return new \_PhpScoper654dfdb702e5\PharIo\Version\Version($version);
    }
}
