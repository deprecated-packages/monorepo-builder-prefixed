<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Split\Configuration;

use _PhpScoperc00d4390f333\Nette\Utils\Strings;
use Symplify\MonorepoBuilder\Split\Exception\InvalidGitRepositoryException;
use Symplify\MonorepoBuilder\Split\Exception\InvalidRepositoryFormatException;
use Symplify\SmartFileSystem\FileSystemGuard;
/**
 * @see \Symplify\MonorepoBuilder\Split\Tests\Configuration\RepositoryGuardTest
 */
final class RepositoryGuard
{
    /**
     * @var string
     * @see https://regex101.com/r/CJQF3W/1
     */
    private const GIT_REPOSITORY_REGEX = '#((git|ssh|http(s)?|file)|(git@[\\w\\.]+)|[\\w]+)(:(//)?)([\\w\\.@\\:/\\-~]+)(\\.git)?(/)?#';
    /**
     * @var FileSystemGuard
     */
    private $fileSystemGuard;
    public function __construct(\Symplify\SmartFileSystem\FileSystemGuard $fileSystemGuard)
    {
        $this->fileSystemGuard = $fileSystemGuard;
    }
    public function ensureIsRepository(string $possibleRepository) : void
    {
        // local repositorye
        if ($possibleRepository === '.git') {
            return;
        }
        if (\_PhpScoperc00d4390f333\Nette\Utils\Strings::match($possibleRepository, self::GIT_REPOSITORY_REGEX)) {
            return;
        }
        throw new \Symplify\MonorepoBuilder\Split\Exception\InvalidRepositoryFormatException(\sprintf('"%s" is not format for repository', $possibleRepository));
    }
    public function ensureIsRepositoryDirectory(string $repositoryDirectory) : void
    {
        $this->fileSystemGuard->ensureDirectoryExists($repositoryDirectory);
        if (\file_exists($repositoryDirectory . '/.git')) {
            return;
        }
        throw new \Symplify\MonorepoBuilder\Split\Exception\InvalidGitRepositoryException(\sprintf('.git was not found in "%s" directory', $repositoryDirectory));
    }
}
