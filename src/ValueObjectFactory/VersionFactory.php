<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper06dc1c8ab9c9\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper06dc1c8ab9c9\PharIo\Version\Version
    {
        return new \_PhpScoper06dc1c8ab9c9\PharIo\Version\Version($version);
    }
}
