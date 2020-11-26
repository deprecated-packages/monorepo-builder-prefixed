<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera3403994bd90\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera3403994bd90\PharIo\Version\Version
    {
        return new \_PhpScopera3403994bd90\PharIo\Version\Version($version);
    }
}
