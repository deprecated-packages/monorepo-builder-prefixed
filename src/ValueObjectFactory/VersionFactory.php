<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperab3ccffcffcd\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperab3ccffcffcd\PharIo\Version\Version
    {
        return new \_PhpScoperab3ccffcffcd\PharIo\Version\Version($version);
    }
}
