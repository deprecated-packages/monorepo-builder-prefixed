<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper4a734d287afc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper4a734d287afc\PharIo\Version\Version
    {
        return new \_PhpScoper4a734d287afc\PharIo\Version\Version($version);
    }
}
