<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper43009128da38\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper43009128da38\PharIo\Version\Version
    {
        return new \_PhpScoper43009128da38\PharIo\Version\Version($version);
    }
}
