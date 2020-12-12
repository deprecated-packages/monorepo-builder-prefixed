<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperdf352df6d893\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperdf352df6d893\PharIo\Version\Version
    {
        return new \_PhpScoperdf352df6d893\PharIo\Version\Version($version);
    }
}
