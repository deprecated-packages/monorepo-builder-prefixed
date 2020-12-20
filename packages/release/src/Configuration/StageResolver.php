<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Configuration;

use _PhpScoper50e98fdc5bc0\Symfony\Component\Console\Input\InputInterface;
use Symplify\MonorepoBuilder\Release\Guard\ReleaseGuard;
use Symplify\MonorepoBuilder\Release\ValueObject\Stage;
use Symplify\MonorepoBuilder\ValueObject\Option;
final class StageResolver
{
    /**
     * @var ReleaseGuard
     */
    private $releaseGuard;
    public function __construct(\Symplify\MonorepoBuilder\Release\Guard\ReleaseGuard $releaseGuard)
    {
        $this->releaseGuard = $releaseGuard;
    }
    public function resolveFromInput(\_PhpScoper50e98fdc5bc0\Symfony\Component\Console\Input\InputInterface $input) : string
    {
        $stage = (string) $input->getOption(\Symplify\MonorepoBuilder\ValueObject\Option::STAGE);
        // empty
        if ($stage === \Symplify\MonorepoBuilder\Release\ValueObject\Stage::MAIN) {
            $this->releaseGuard->guardRequiredStageOnEmptyStage();
        } else {
            $this->releaseGuard->guardStage($stage);
        }
        return $stage;
    }
}
