<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere846b54512fc\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere846b54512fc\PharIo\Version\Version
    {
        return new \_PhpScopere846b54512fc\PharIo\Version\Version($version);
    }
}
