<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3d314ab2cab4\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3d314ab2cab4\PharIo\Version\Version
    {
        return new \_PhpScoper3d314ab2cab4\PharIo\Version\Version($version);
    }
}
