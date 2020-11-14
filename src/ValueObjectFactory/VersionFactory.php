<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperae7532b8c744\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperae7532b8c744\PharIo\Version\Version
    {
        return new \_PhpScoperae7532b8c744\PharIo\Version\Version($version);
    }
}
