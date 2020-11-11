<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper5a7e73320450\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper5a7e73320450\PharIo\Version\Version
    {
        return new \_PhpScoper5a7e73320450\PharIo\Version\Version($version);
    }
}
