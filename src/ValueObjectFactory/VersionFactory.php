<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperfdd2db5e123d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperfdd2db5e123d\PharIo\Version\Version
    {
        return new \_PhpScoperfdd2db5e123d\PharIo\Version\Version($version);
    }
}
