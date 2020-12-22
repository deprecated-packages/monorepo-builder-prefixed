<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper674f850a9604\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper674f850a9604\PharIo\Version\Version
    {
        return new \_PhpScoper674f850a9604\PharIo\Version\Version($version);
    }
}
