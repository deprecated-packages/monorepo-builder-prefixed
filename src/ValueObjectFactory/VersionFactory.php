<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper0087e037e0f7\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper0087e037e0f7\PharIo\Version\Version
    {
        return new \_PhpScoper0087e037e0f7\PharIo\Version\Version($version);
    }
}
