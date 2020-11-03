<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd0ff379dfdc7\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd0ff379dfdc7\PharIo\Version\Version
    {
        return new \_PhpScoperd0ff379dfdc7\PharIo\Version\Version($version);
    }
}
