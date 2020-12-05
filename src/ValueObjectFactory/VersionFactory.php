<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopereaa086e6f852\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopereaa086e6f852\PharIo\Version\Version
    {
        return new \_PhpScopereaa086e6f852\PharIo\Version\Version($version);
    }
}
