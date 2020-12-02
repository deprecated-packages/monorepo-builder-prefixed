<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera2ff5fd2b59c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera2ff5fd2b59c\PharIo\Version\Version
    {
        return new \_PhpScopera2ff5fd2b59c\PharIo\Version\Version($version);
    }
}
