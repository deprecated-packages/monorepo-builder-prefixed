<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera42d72b2de70\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera42d72b2de70\PharIo\Version\Version
    {
        return new \_PhpScopera42d72b2de70\PharIo\Version\Version($version);
    }
}
