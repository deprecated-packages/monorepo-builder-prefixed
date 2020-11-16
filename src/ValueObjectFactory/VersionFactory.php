<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperdfa889d8967a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperdfa889d8967a\PharIo\Version\Version
    {
        return new \_PhpScoperdfa889d8967a\PharIo\Version\Version($version);
    }
}
