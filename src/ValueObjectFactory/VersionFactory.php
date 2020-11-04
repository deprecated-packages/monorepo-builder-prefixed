<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper860bc98a0f96\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper860bc98a0f96\PharIo\Version\Version
    {
        return new \_PhpScoper860bc98a0f96\PharIo\Version\Version($version);
    }
}
