<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper32df52184457\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper32df52184457\PharIo\Version\Version
    {
        return new \_PhpScoper32df52184457\PharIo\Version\Version($version);
    }
}
