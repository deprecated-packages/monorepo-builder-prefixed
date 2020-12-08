<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperfa13b4bfa005\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperfa13b4bfa005\PharIo\Version\Version
    {
        return new \_PhpScoperfa13b4bfa005\PharIo\Version\Version($version);
    }
}
