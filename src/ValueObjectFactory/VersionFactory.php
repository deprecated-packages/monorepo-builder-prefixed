<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperec2b815193b4\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperec2b815193b4\PharIo\Version\Version
    {
        return new \_PhpScoperec2b815193b4\PharIo\Version\Version($version);
    }
}
