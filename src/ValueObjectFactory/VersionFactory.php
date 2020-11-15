<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperaff2103cee1d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperaff2103cee1d\PharIo\Version\Version
    {
        return new \_PhpScoperaff2103cee1d\PharIo\Version\Version($version);
    }
}
