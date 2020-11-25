<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper76c4aa553101\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper76c4aa553101\PharIo\Version\Version
    {
        return new \_PhpScoper76c4aa553101\PharIo\Version\Version($version);
    }
}
