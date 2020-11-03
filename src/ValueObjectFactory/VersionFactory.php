<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper462f168ef4cc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper462f168ef4cc\PharIo\Version\Version
    {
        return new \_PhpScoper462f168ef4cc\PharIo\Version\Version($version);
    }
}
