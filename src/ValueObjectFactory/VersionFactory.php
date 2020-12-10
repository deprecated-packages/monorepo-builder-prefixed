<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperfa7966ff486f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperfa7966ff486f\PharIo\Version\Version
    {
        return new \_PhpScoperfa7966ff486f\PharIo\Version\Version($version);
    }
}
