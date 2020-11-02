<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper4a664f294d9c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper4a664f294d9c\PharIo\Version\Version
    {
        return new \_PhpScoper4a664f294d9c\PharIo\Version\Version($version);
    }
}
