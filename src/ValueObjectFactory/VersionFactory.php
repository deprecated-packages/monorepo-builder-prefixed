<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera31d0d6ff47a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera31d0d6ff47a\PharIo\Version\Version
    {
        return new \_PhpScopera31d0d6ff47a\PharIo\Version\Version($version);
    }
}
