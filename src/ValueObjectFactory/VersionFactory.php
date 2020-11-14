<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera2f1d1d42b88\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera2f1d1d42b88\PharIo\Version\Version
    {
        return new \_PhpScopera2f1d1d42b88\PharIo\Version\Version($version);
    }
}
