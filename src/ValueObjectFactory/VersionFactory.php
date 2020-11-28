<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper1ff8e175c295\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper1ff8e175c295\PharIo\Version\Version
    {
        return new \_PhpScoper1ff8e175c295\PharIo\Version\Version($version);
    }
}
