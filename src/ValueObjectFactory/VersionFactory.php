<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper674b08d66902\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper674b08d66902\PharIo\Version\Version
    {
        return new \_PhpScoper674b08d66902\PharIo\Version\Version($version);
    }
}
