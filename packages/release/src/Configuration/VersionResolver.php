<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Configuration;

use _PhpScoperab93339c6bca\PharIo\Version\Version;
use _PhpScoperab93339c6bca\Symfony\Component\Console\Input\InputInterface;
use Symplify\MonorepoBuilder\Release\Version\VersionFactory;
use Symplify\MonorepoBuilder\ValueObject\Option;
final class VersionResolver
{
    /**
     * @var VersionFactory
     */
    private $versionFactory;
    public function __construct(\Symplify\MonorepoBuilder\Release\Version\VersionFactory $versionFactory)
    {
        $this->versionFactory = $versionFactory;
    }
    public function resolveVersion(\_PhpScoperab93339c6bca\Symfony\Component\Console\Input\InputInterface $input, string $stage) : \_PhpScoperab93339c6bca\PharIo\Version\Version
    {
        /** @var string $versionArgument */
        $versionArgument = $input->getArgument(\Symplify\MonorepoBuilder\ValueObject\Option::VERSION);
        return $this->versionFactory->createValidVersion($versionArgument, $stage);
    }
}
