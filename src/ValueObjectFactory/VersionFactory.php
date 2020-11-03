<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper472361b15529\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper472361b15529\PharIo\Version\Version
    {
        return new \_PhpScoper472361b15529\PharIo\Version\Version($version);
    }
}
