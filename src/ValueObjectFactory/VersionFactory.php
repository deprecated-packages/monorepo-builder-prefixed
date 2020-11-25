<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd659a053ca1c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd659a053ca1c\PharIo\Version\Version
    {
        return new \_PhpScoperd659a053ca1c\PharIo\Version\Version($version);
    }
}
