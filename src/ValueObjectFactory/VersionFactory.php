<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3c4d71e1434d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3c4d71e1434d\PharIo\Version\Version
    {
        return new \_PhpScoper3c4d71e1434d\PharIo\Version\Version($version);
    }
}
