<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper38889e21c753\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper38889e21c753\PharIo\Version\Version
    {
        return new \_PhpScoper38889e21c753\PharIo\Version\Version($version);
    }
}
