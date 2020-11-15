<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper777981beaf84\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper777981beaf84\PharIo\Version\Version
    {
        return new \_PhpScoper777981beaf84\PharIo\Version\Version($version);
    }
}
