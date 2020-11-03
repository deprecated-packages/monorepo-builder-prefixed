<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere7b233920bf2\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere7b233920bf2\PharIo\Version\Version
    {
        return new \_PhpScopere7b233920bf2\PharIo\Version\Version($version);
    }
}
