<?php

declare (strict_types=1);
namespace Symplify\SmartFileSystem;

use _PhpScoper54d694ea578e\Nette\Utils\Strings;
use _PhpScoper54d694ea578e\Symfony\Component\Finder\SplFileInfo;
use Symplify\EasyTesting\PHPUnit\StaticPHPUnitEnvironment;
use Symplify\EasyTesting\StaticFixtureSplitter;
use Symplify\SmartFileSystem\Exception\DirectoryNotFoundException;
use Symplify\SmartFileSystem\Exception\FileNotFoundException;
/**
 * @see \Symplify\SmartFileSystem\Tests\SmartFileInfo\SmartFileInfoTest
 */
final class SmartFileInfo extends \_PhpScoper54d694ea578e\Symfony\Component\Finder\SplFileInfo
{
    /**
     * @var string
     * @see https://regex101.com/r/SYP00O/1
     */
    private const LAST_SUFFIX_REGEX = '#\\.[^.]+$#';
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    public function __construct($filePath)
    {
        $this->smartFileSystem = new \Symplify\SmartFileSystem\SmartFileSystem();
        // accepts also dirs
        if (!\file_exists($filePath)) {
            throw new \Symplify\SmartFileSystem\Exception\FileNotFoundException(\sprintf('File path "%s" was not found while creating "%s" object.', $filePath, self::class));
        }
        // real path doesn't work in PHAR: https://www.php.net/manual/en/function.realpath.php
        if (\_PhpScoper54d694ea578e\Nette\Utils\Strings::startsWith($filePath, 'phar://')) {
            $relativeFilePath = $filePath;
            $relativeDirectoryPath = \dirname($filePath);
        } else {
            $realPath = \realpath($filePath);
            $relativeFilePath = \rtrim($this->smartFileSystem->makePathRelative($realPath, \getcwd()), '/');
            $relativeDirectoryPath = \dirname($relativeFilePath);
        }
        parent::__construct($filePath, $relativeDirectoryPath, $relativeFilePath);
    }
    public function getBasenameWithoutSuffix() : string
    {
        return \pathinfo($this->getFilename())['filename'];
    }
    public function getSuffix() : string
    {
        return \pathinfo($this->getFilename(), \PATHINFO_EXTENSION);
    }
    public function hasSuffixes(array $suffixes) : bool
    {
        return \in_array($this->getSuffix(), $suffixes, \true);
    }
    public function getRealPathWithoutSuffix() : string
    {
        return \_PhpScoper54d694ea578e\Nette\Utils\Strings::replace($this->getRealPath(), self::LAST_SUFFIX_REGEX, '');
    }
    public function getRelativeFilePath() : string
    {
        return $this->getRelativePathname();
    }
    public function getRelativeDirectoryPath() : string
    {
        return $this->getRelativePath();
    }
    public function getRelativeFilePathFromDirectory(string $directory) : string
    {
        if (!\file_exists($directory)) {
            throw new \Symplify\SmartFileSystem\Exception\DirectoryNotFoundException(\sprintf('Directory "%s" was not found in %s.', $directory, self::class));
        }
        return \rtrim($this->smartFileSystem->makePathRelative($this->getNormalizedRealPath(), (string) \realpath($directory)), '/');
    }
    public function getRelativeFilePathFromCwdInTests() : string
    {
        // special case for tests
        if (\Symplify\EasyTesting\PHPUnit\StaticPHPUnitEnvironment::isPHPUnitRun()) {
            return $this->getRelativeFilePathFromDirectory(\Symplify\EasyTesting\StaticFixtureSplitter::getTemporaryPath());
        }
        return $this->getRelativeFilePathFromDirectory(\getcwd());
    }
    public function getRelativeFilePathFromCwd() : string
    {
        return $this->getRelativeFilePathFromDirectory(\getcwd());
    }
    public function endsWith(string $string) : bool
    {
        return \_PhpScoper54d694ea578e\Nette\Utils\Strings::endsWith($this->getNormalizedRealPath(), $string);
    }
    public function doesFnmatch(string $string) : bool
    {
        if (\fnmatch($this->normalizePath($string), $this->getNormalizedRealPath())) {
            return \true;
        }
        // in case of relative compare
        return \fnmatch('*/' . $this->normalizePath($string), $this->getNormalizedRealPath());
    }
    public function getRealPath() : string
    {
        // for phar compatibility @see https://github.com/rectorphp/rector/commit/e5d7cee69558f7e6b35d995a5ca03fa481b0407c
        return parent::getRealPath() ?: $this->getPathname();
    }
    public function getRealPathDirectory() : string
    {
        return \dirname($this->getRealPath());
    }
    private function getNormalizedRealPath() : string
    {
        return $this->normalizePath($this->getRealPath());
    }
    private function normalizePath(string $path) : string
    {
        return \str_replace('\\', '/', $path);
    }
}
