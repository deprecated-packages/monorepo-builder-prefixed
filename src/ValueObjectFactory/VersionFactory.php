<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper68683f91c63d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper68683f91c63d\PharIo\Version\Version
    {
        return new \_PhpScoper68683f91c63d\PharIo\Version\Version($version);
    }
}
