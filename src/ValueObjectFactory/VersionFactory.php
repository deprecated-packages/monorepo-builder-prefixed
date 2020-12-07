<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperab93339c6bca\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperab93339c6bca\PharIo\Version\Version
    {
        return new \_PhpScoperab93339c6bca\PharIo\Version\Version($version);
    }
}
