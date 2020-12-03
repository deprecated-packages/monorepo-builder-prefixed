<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3bda9af7e0fd\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3bda9af7e0fd\PharIo\Version\Version
    {
        return new \_PhpScoper3bda9af7e0fd\PharIo\Version\Version($version);
    }
}
