<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd924ce906654\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd924ce906654\PharIo\Version\Version
    {
        return new \_PhpScoperd924ce906654\PharIo\Version\Version($version);
    }
}
