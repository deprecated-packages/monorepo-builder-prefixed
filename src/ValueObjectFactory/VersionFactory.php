<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper31a2d0e8f655\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper31a2d0e8f655\PharIo\Version\Version
    {
        return new \_PhpScoper31a2d0e8f655\PharIo\Version\Version($version);
    }
}
