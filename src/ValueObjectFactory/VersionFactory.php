<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperdd9048e10aae\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperdd9048e10aae\PharIo\Version\Version
    {
        return new \_PhpScoperdd9048e10aae\PharIo\Version\Version($version);
    }
}
