<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopercd5c1af09a49\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopercd5c1af09a49\PharIo\Version\Version
    {
        return new \_PhpScopercd5c1af09a49\PharIo\Version\Version($version);
    }
}
