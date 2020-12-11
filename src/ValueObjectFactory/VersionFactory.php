<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper204b3b8f3e0d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper204b3b8f3e0d\PharIo\Version\Version
    {
        return new \_PhpScoper204b3b8f3e0d\PharIo\Version\Version($version);
    }
}
