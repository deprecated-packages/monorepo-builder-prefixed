<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera2bd9a9af620\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera2bd9a9af620\PharIo\Version\Version
    {
        return new \_PhpScopera2bd9a9af620\PharIo\Version\Version($version);
    }
}
