<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperfec5e512f2f8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperfec5e512f2f8\PharIo\Version\Version
    {
        return new \_PhpScoperfec5e512f2f8\PharIo\Version\Version($version);
    }
}
