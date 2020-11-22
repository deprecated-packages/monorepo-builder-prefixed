<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper1f0085d891d8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper1f0085d891d8\PharIo\Version\Version
    {
        return new \_PhpScoper1f0085d891d8\PharIo\Version\Version($version);
    }
}
