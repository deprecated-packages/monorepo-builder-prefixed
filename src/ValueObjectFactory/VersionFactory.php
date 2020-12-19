<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3b1dc0f3c466\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3b1dc0f3c466\PharIo\Version\Version
    {
        return new \_PhpScoper3b1dc0f3c466\PharIo\Version\Version($version);
    }
}
