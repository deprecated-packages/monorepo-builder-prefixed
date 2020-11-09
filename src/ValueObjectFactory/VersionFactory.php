<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper8a4bdaafa6ec\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper8a4bdaafa6ec\PharIo\Version\Version
    {
        return new \_PhpScoper8a4bdaafa6ec\PharIo\Version\Version($version);
    }
}
