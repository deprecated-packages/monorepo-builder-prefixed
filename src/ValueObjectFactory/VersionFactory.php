<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperad3f32c1b87c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperad3f32c1b87c\PharIo\Version\Version
    {
        return new \_PhpScoperad3f32c1b87c\PharIo\Version\Version($version);
    }
}
