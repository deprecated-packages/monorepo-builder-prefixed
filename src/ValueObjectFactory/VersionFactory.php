<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper8a421ef9d4c6\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper8a421ef9d4c6\PharIo\Version\Version
    {
        return new \_PhpScoper8a421ef9d4c6\PharIo\Version\Version($version);
    }
}
