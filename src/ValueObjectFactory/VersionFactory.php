<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper9ea409d355af\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper9ea409d355af\PharIo\Version\Version
    {
        return new \_PhpScoper9ea409d355af\PharIo\Version\Version($version);
    }
}
