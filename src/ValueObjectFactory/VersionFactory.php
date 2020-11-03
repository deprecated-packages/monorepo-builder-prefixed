<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper9b7e9beaf949\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper9b7e9beaf949\PharIo\Version\Version
    {
        return new \_PhpScoper9b7e9beaf949\PharIo\Version\Version($version);
    }
}
