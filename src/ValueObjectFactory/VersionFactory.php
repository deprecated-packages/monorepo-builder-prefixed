<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc86a79e2d6b2\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc86a79e2d6b2\PharIo\Version\Version
    {
        return new \_PhpScoperc86a79e2d6b2\PharIo\Version\Version($version);
    }
}
