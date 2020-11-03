<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper437fa56c88e1\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper437fa56c88e1\PharIo\Version\Version
    {
        return new \_PhpScoper437fa56c88e1\PharIo\Version\Version($version);
    }
}
