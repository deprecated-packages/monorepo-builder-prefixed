<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3901c1bd2445\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3901c1bd2445\PharIo\Version\Version
    {
        return new \_PhpScoper3901c1bd2445\PharIo\Version\Version($version);
    }
}
