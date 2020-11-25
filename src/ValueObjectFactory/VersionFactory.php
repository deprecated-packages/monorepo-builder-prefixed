<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopereaa2cae8e093\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopereaa2cae8e093\PharIo\Version\Version
    {
        return new \_PhpScopereaa2cae8e093\PharIo\Version\Version($version);
    }
}
