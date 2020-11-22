<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper36654c852ab2\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper36654c852ab2\PharIo\Version\Version
    {
        return new \_PhpScoper36654c852ab2\PharIo\Version\Version($version);
    }
}
