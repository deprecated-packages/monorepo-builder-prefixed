<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper503cab241f82\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper503cab241f82\PharIo\Version\Version
    {
        return new \_PhpScoper503cab241f82\PharIo\Version\Version($version);
    }
}
