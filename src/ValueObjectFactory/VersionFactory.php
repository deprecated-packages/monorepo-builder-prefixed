<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperebc1087502f3\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperebc1087502f3\PharIo\Version\Version
    {
        return new \_PhpScoperebc1087502f3\PharIo\Version\Version($version);
    }
}
