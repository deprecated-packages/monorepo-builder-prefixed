<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper22d98a58be40\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper22d98a58be40\PharIo\Version\Version
    {
        return new \_PhpScoper22d98a58be40\PharIo\Version\Version($version);
    }
}
