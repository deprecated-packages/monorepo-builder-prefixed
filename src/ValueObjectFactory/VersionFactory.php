<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper98290f688d14\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper98290f688d14\PharIo\Version\Version
    {
        return new \_PhpScoper98290f688d14\PharIo\Version\Version($version);
    }
}
