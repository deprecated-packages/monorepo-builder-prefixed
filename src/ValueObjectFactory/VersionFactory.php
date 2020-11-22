<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper66a1b4bf441c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper66a1b4bf441c\PharIo\Version\Version
    {
        return new \_PhpScoper66a1b4bf441c\PharIo\Version\Version($version);
    }
}
