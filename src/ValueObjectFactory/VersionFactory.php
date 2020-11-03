<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper62894f8143f4\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper62894f8143f4\PharIo\Version\Version
    {
        return new \_PhpScoper62894f8143f4\PharIo\Version\Version($version);
    }
}
