<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper95e170f0b4ac\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper95e170f0b4ac\PharIo\Version\Version
    {
        return new \_PhpScoper95e170f0b4ac\PharIo\Version\Version($version);
    }
}
