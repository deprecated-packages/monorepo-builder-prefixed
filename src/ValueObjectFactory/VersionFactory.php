<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperdfdcb3d4cca0\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperdfdcb3d4cca0\PharIo\Version\Version
    {
        return new \_PhpScoperdfdcb3d4cca0\PharIo\Version\Version($version);
    }
}
