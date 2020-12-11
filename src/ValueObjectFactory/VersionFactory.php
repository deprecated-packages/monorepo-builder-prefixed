<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc8aee0bf0015\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc8aee0bf0015\PharIo\Version\Version
    {
        return new \_PhpScoperc8aee0bf0015\PharIo\Version\Version($version);
    }
}
