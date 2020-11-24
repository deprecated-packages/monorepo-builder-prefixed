<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd2185c67a4b4\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd2185c67a4b4\PharIo\Version\Version
    {
        return new \_PhpScoperd2185c67a4b4\PharIo\Version\Version($version);
    }
}
