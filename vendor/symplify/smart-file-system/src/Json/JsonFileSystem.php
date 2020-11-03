<?php

declare (strict_types=1);
namespace Symplify\SmartFileSystem\Json;

use _PhpScopera763b4be90d0\Nette\Utils\Arrays;
use _PhpScopera763b4be90d0\Nette\Utils\Json;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\SmartFileSystem;
/**
 * @see \Symplify\SmartFileSystem\Tests\Json\JsonFileSystem\JsonFileSystemTest
 */
final class JsonFileSystem
{
    /**
     * @var FileSystemGuard
     */
    private $fileSystemGuard;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    public function __construct(\Symplify\SmartFileSystem\FileSystemGuard $fileSystemGuard, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem)
    {
        $this->fileSystemGuard = $fileSystemGuard;
        $this->smartFileSystem = $smartFileSystem;
    }
    public function loadFilePathToJson(string $filePath) : array
    {
        $this->fileSystemGuard->ensureFileExists($filePath, __METHOD__);
        $fileContent = $this->smartFileSystem->readFile($filePath);
        return \_PhpScopera763b4be90d0\Nette\Utils\Json::decode($fileContent, \_PhpScopera763b4be90d0\Nette\Utils\Json::FORCE_ARRAY);
    }
    public function writeJsonToFilePath(array $jsonArray, string $filePath) : void
    {
        $jsonContent = \_PhpScopera763b4be90d0\Nette\Utils\Json::encode($jsonArray, \_PhpScopera763b4be90d0\Nette\Utils\Json::PRETTY) . \PHP_EOL;
        $this->smartFileSystem->dumpFile($filePath, $jsonContent);
    }
    public function mergeArrayToJsonFile(string $filePath, array $newJsonArray) : void
    {
        $jsonArray = $this->loadFilePathToJson($filePath);
        $newComposerJsonArray = \_PhpScopera763b4be90d0\Nette\Utils\Arrays::mergeTree($jsonArray, $newJsonArray);
        $this->writeJsonToFilePath($newComposerJsonArray, $filePath);
    }
}
