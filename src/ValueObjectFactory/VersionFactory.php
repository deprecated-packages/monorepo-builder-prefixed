<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper9aac61c94bdb\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper9aac61c94bdb\PharIo\Version\Version
    {
        return new \_PhpScoper9aac61c94bdb\PharIo\Version\Version($version);
    }
}
