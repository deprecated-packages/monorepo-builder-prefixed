<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper0fa0b2363a34\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper0fa0b2363a34\PharIo\Version\Version
    {
        return new \_PhpScoper0fa0b2363a34\PharIo\Version\Version($version);
    }
}
