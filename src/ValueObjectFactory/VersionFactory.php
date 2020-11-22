<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper30f4a2553084\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper30f4a2553084\PharIo\Version\Version
    {
        return new \_PhpScoper30f4a2553084\PharIo\Version\Version($version);
    }
}
