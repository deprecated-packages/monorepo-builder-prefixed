<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper7aa910bab0da\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper7aa910bab0da\PharIo\Version\Version
    {
        return new \_PhpScoper7aa910bab0da\PharIo\Version\Version($version);
    }
}
