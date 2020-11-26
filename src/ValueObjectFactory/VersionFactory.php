<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper905a278e297d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper905a278e297d\PharIo\Version\Version
    {
        return new \_PhpScoper905a278e297d\PharIo\Version\Version($version);
    }
}
