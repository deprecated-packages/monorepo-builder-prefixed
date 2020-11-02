<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf13942e847ea\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf13942e847ea\PharIo\Version\Version
    {
        return new \_PhpScoperf13942e847ea\PharIo\Version\Version($version);
    }
}
