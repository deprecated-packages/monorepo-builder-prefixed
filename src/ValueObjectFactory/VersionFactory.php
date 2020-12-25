<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper847a0f3260b6\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper847a0f3260b6\PharIo\Version\Version
    {
        return new \_PhpScoper847a0f3260b6\PharIo\Version\Version($version);
    }
}
