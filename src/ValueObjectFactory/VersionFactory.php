<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper8c1a18e00fc1\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper8c1a18e00fc1\PharIo\Version\Version
    {
        return new \_PhpScoper8c1a18e00fc1\PharIo\Version\Version($version);
    }
}
