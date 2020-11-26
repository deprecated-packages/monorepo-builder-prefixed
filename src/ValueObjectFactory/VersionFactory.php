<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper485f3a9238ad\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper485f3a9238ad\PharIo\Version\Version
    {
        return new \_PhpScoper485f3a9238ad\PharIo\Version\Version($version);
    }
}
