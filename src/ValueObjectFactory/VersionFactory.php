<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd8a347ec1761\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd8a347ec1761\PharIo\Version\Version
    {
        return new \_PhpScoperd8a347ec1761\PharIo\Version\Version($version);
    }
}
