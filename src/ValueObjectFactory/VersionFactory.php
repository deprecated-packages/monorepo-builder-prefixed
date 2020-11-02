<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc4f03b8b365d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc4f03b8b365d\PharIo\Version\Version
    {
        return new \_PhpScoperc4f03b8b365d\PharIo\Version\Version($version);
    }
}
