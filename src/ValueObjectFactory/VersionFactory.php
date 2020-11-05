<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3ac0b040c6af\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3ac0b040c6af\PharIo\Version\Version
    {
        return new \_PhpScoper3ac0b040c6af\PharIo\Version\Version($version);
    }
}
