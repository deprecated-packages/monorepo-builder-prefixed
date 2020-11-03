<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper9022b927643b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper9022b927643b\PharIo\Version\Version
    {
        return new \_PhpScoper9022b927643b\PharIo\Version\Version($version);
    }
}
