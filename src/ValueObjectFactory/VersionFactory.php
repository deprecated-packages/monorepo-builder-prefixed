<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper120e1a259c7c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper120e1a259c7c\PharIo\Version\Version
    {
        return new \_PhpScoper120e1a259c7c\PharIo\Version\Version($version);
    }
}
