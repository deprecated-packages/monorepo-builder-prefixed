<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper37887d2f9246\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper37887d2f9246\PharIo\Version\Version
    {
        return new \_PhpScoper37887d2f9246\PharIo\Version\Version($version);
    }
}
