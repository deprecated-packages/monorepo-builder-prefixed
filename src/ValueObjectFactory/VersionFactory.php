<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper50e98fdc5bc0\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper50e98fdc5bc0\PharIo\Version\Version
    {
        return new \_PhpScoper50e98fdc5bc0\PharIo\Version\Version($version);
    }
}
