<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper6c30e6f631ea\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper6c30e6f631ea\PharIo\Version\Version
    {
        return new \_PhpScoper6c30e6f631ea\PharIo\Version\Version($version);
    }
}
