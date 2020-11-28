<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperbe77f3b0e77d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperbe77f3b0e77d\PharIo\Version\Version
    {
        return new \_PhpScoperbe77f3b0e77d\PharIo\Version\Version($version);
    }
}
