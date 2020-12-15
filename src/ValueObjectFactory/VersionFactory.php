<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd79f30a2f8be\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd79f30a2f8be\PharIo\Version\Version
    {
        return new \_PhpScoperd79f30a2f8be\PharIo\Version\Version($version);
    }
}
