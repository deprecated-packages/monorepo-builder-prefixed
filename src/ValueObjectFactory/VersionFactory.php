<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper0ce3ac6864aa\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper0ce3ac6864aa\PharIo\Version\Version
    {
        return new \_PhpScoper0ce3ac6864aa\PharIo\Version\Version($version);
    }
}
