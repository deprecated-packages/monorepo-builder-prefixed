<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera3f2f7450f99\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera3f2f7450f99\PharIo\Version\Version
    {
        return new \_PhpScopera3f2f7450f99\PharIo\Version\Version($version);
    }
}
