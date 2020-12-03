<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3a64dbb4e14f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3a64dbb4e14f\PharIo\Version\Version
    {
        return new \_PhpScoper3a64dbb4e14f\PharIo\Version\Version($version);
    }
}
