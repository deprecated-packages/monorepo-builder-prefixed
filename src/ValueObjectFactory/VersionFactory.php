<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd607abf1de8e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd607abf1de8e\PharIo\Version\Version
    {
        return new \_PhpScoperd607abf1de8e\PharIo\Version\Version($version);
    }
}
