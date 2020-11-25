<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper79999b045682\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper79999b045682\PharIo\Version\Version
    {
        return new \_PhpScoper79999b045682\PharIo\Version\Version($version);
    }
}
