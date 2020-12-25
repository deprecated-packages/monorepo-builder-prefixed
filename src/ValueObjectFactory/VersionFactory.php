<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper8b183f8218dc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper8b183f8218dc\PharIo\Version\Version
    {
        return new \_PhpScoper8b183f8218dc\PharIo\Version\Version($version);
    }
}
