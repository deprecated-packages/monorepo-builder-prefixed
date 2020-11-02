<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperddc6df5a78fd\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperddc6df5a78fd\PharIo\Version\Version
    {
        return new \_PhpScoperddc6df5a78fd\PharIo\Version\Version($version);
    }
}
