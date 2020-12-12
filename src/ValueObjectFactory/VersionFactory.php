<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd72531165ef5\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd72531165ef5\PharIo\Version\Version
    {
        return new \_PhpScoperd72531165ef5\PharIo\Version\Version($version);
    }
}
