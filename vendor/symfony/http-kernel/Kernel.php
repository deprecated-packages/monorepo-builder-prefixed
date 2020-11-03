<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba481e4bff85\Symfony\Component\HttpKernel;

use _PhpScoperba481e4bff85\Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\RuntimeInstantiator;
use _PhpScoperba481e4bff85\Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\ProxyDumper;
use _PhpScoperba481e4bff85\Symfony\Component\Config\ConfigCache;
use _PhpScoperba481e4bff85\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperba481e4bff85\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperba481e4bff85\Symfony\Component\Debug\DebugClassLoader as LegacyDebugClassLoader;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Compiler\PassConfig;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Dumper\PhpDumper;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Dumper\Preloader;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\ClosureLoader;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\DirectoryLoader;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\GlobFileLoader;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\IniFileLoader;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use _PhpScoperba481e4bff85\Symfony\Component\ErrorHandler\DebugClassLoader;
use _PhpScoperba481e4bff85\Symfony\Component\Filesystem\Filesystem;
use _PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request;
use _PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Response;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\DependencyInjection\AddAnnotatedClassesToCachePass;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\DependencyInjection\MergeExtensionConfigurationPass;
// Help opcache.preload discover always-needed symbols
\class_exists(\_PhpScoperba481e4bff85\Symfony\Component\Config\ConfigCache::class);
/**
 * The Kernel is the heart of the Symfony system.
 *
 * It manages an environment made of bundles.
 *
 * Environment names must always start with a letter and
 * they must only contain letters and numbers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Kernel implements \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\KernelInterface, \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\RebootableInterface, \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\TerminableInterface
{
    /**
     * @var BundleInterface[]
     */
    protected $bundles = [];
    protected $container;
    protected $environment;
    protected $debug;
    protected $booted = \false;
    protected $startTime;
    private $projectDir;
    private $warmupDir;
    private $requestStackSize = 0;
    private $resetServices = \false;
    private static $freshCache = [];
    const VERSION = '5.1.8';
    const VERSION_ID = 50108;
    const MAJOR_VERSION = 5;
    const MINOR_VERSION = 1;
    const RELEASE_VERSION = 8;
    const EXTRA_VERSION = '';
    const END_OF_MAINTENANCE = '01/2021';
    const END_OF_LIFE = '01/2021';
    public function __construct(string $environment, bool $debug)
    {
        $this->environment = $environment;
        $this->debug = $debug;
    }
    public function __clone()
    {
        $this->booted = \false;
        $this->container = null;
        $this->requestStackSize = 0;
        $this->resetServices = \false;
    }
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        if (\true === $this->booted) {
            if (!$this->requestStackSize && $this->resetServices) {
                if ($this->container->has('services_resetter')) {
                    $this->container->get('services_resetter')->reset();
                }
                $this->resetServices = \false;
                if ($this->debug) {
                    $this->startTime = \microtime(\true);
                }
            }
            return;
        }
        if ($this->debug) {
            $this->startTime = \microtime(\true);
        }
        if ($this->debug && !isset($_ENV['SHELL_VERBOSITY']) && !isset($_SERVER['SHELL_VERBOSITY'])) {
            \putenv('SHELL_VERBOSITY=3');
            $_ENV['SHELL_VERBOSITY'] = 3;
            $_SERVER['SHELL_VERBOSITY'] = 3;
        }
        // init bundles
        $this->initializeBundles();
        // init container
        $this->initializeContainer();
        foreach ($this->getBundles() as $bundle) {
            $bundle->setContainer($this->container);
            $bundle->boot();
        }
        $this->booted = \true;
    }
    /**
     * {@inheritdoc}
     */
    public function reboot(?string $warmupDir)
    {
        $this->shutdown();
        $this->warmupDir = $warmupDir;
        $this->boot();
    }
    /**
     * {@inheritdoc}
     */
    public function terminate(\_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Response $response)
    {
        if (\false === $this->booted) {
            return;
        }
        if ($this->getHttpKernel() instanceof \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\TerminableInterface) {
            $this->getHttpKernel()->terminate($request, $response);
        }
    }
    /**
     * {@inheritdoc}
     */
    public function shutdown()
    {
        if (\false === $this->booted) {
            return;
        }
        $this->booted = \false;
        foreach ($this->getBundles() as $bundle) {
            $bundle->shutdown();
            $bundle->setContainer(null);
        }
        $this->container = null;
        $this->requestStackSize = 0;
        $this->resetServices = \false;
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\_PhpScoperba481e4bff85\Symfony\Component\HttpFoundation\Request $request, int $type = \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST, bool $catch = \true)
    {
        $this->boot();
        ++$this->requestStackSize;
        $this->resetServices = \true;
        try {
            return $this->getHttpKernel()->handle($request, $type, $catch);
        } finally {
            --$this->requestStackSize;
        }
    }
    /**
     * Gets a HTTP kernel from the container.
     *
     * @return HttpKernelInterface
     */
    protected function getHttpKernel()
    {
        return $this->container->get('http_kernel');
    }
    /**
     * {@inheritdoc}
     */
    public function getBundles()
    {
        return $this->bundles;
    }
    /**
     * {@inheritdoc}
     */
    public function getBundle(string $name)
    {
        if (!isset($this->bundles[$name])) {
            throw new \InvalidArgumentException(\sprintf('Bundle "%s" does not exist or it is not enabled. Maybe you forgot to add it in the "registerBundles()" method of your "%s.php" file?', $name, \get_debug_type($this)));
        }
        return $this->bundles[$name];
    }
    /**
     * {@inheritdoc}
     */
    public function locateResource(string $name)
    {
        if ('@' !== $name[0]) {
            throw new \InvalidArgumentException(\sprintf('A resource name must start with @ ("%s" given).', $name));
        }
        if (\false !== \strpos($name, '..')) {
            throw new \RuntimeException(\sprintf('File name "%s" contains invalid characters (..).', $name));
        }
        $bundleName = \substr($name, 1);
        $path = '';
        if (\false !== \strpos($bundleName, '/')) {
            list($bundleName, $path) = \explode('/', $bundleName, 2);
        }
        $bundle = $this->getBundle($bundleName);
        if (\file_exists($file = $bundle->getPath() . '/' . $path)) {
            return $file;
        }
        throw new \InvalidArgumentException(\sprintf('Unable to find file "%s".', $name));
    }
    /**
     * {@inheritdoc}
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return $this->debug;
    }
    /**
     * Gets the application root dir (path of the project's composer file).
     *
     * @return string The project root dir
     */
    public function getProjectDir()
    {
        if (null === $this->projectDir) {
            $r = new \ReflectionObject($this);
            if (!\is_file($dir = $r->getFileName())) {
                throw new \LogicException(\sprintf('Cannot auto-detect project dir for kernel of class "%s".', $r->name));
            }
            $dir = $rootDir = \dirname($dir);
            while (!\is_file($dir . '/composer.json')) {
                if ($dir === \dirname($dir)) {
                    return $this->projectDir = $rootDir;
                }
                $dir = \dirname($dir);
            }
            $this->projectDir = $dir;
        }
        return $this->projectDir;
    }
    /**
     * {@inheritdoc}
     */
    public function getContainer()
    {
        if (!$this->container) {
            throw new \LogicException('Cannot retrieve the container from a non-booted kernel.');
        }
        return $this->container;
    }
    /**
     * @internal
     */
    public function setAnnotatedClassCache(array $annotatedClasses)
    {
        \file_put_contents(($this->warmupDir ?: $this->getCacheDir()) . '/annotations.map', \sprintf('<?php return %s;', \var_export($annotatedClasses, \true)));
    }
    /**
     * {@inheritdoc}
     */
    public function getStartTime()
    {
        return $this->debug && null !== $this->startTime ? $this->startTime : -\INF;
    }
    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
        return $this->getProjectDir() . '/var/cache/' . $this->environment;
    }
    /**
     * {@inheritdoc}
     */
    public function getLogDir()
    {
        return $this->getProjectDir() . '/var/log';
    }
    /**
     * {@inheritdoc}
     */
    public function getCharset()
    {
        return 'UTF-8';
    }
    /**
     * Gets the patterns defining the classes to parse and cache for annotations.
     */
    public function getAnnotatedClassesToCompile() : array
    {
        return [];
    }
    /**
     * Initializes bundles.
     *
     * @throws \LogicException if two bundles share a common name
     */
    protected function initializeBundles()
    {
        // init bundles
        $this->bundles = [];
        foreach ($this->registerBundles() as $bundle) {
            $name = $bundle->getName();
            if (isset($this->bundles[$name])) {
                throw new \LogicException(\sprintf('Trying to register two bundles with the same name "%s".', $name));
            }
            $this->bundles[$name] = $bundle;
        }
    }
    /**
     * The extension point similar to the Bundle::build() method.
     *
     * Use this method to register compiler passes and manipulate the container during the building process.
     */
    protected function build(\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
    /**
     * Gets the container class.
     *
     * @throws \InvalidArgumentException If the generated classname is invalid
     *
     * @return string The container class
     */
    protected function getContainerClass()
    {
        $class = static::class;
        $class = \false !== \strpos($class, "@anonymous\0") ? \get_parent_class($class) . \str_replace('.', '_', \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder::hash($class)) : $class;
        $class = \str_replace('\\', '_', $class) . \ucfirst($this->environment) . ($this->debug ? 'Debug' : '') . 'Container';
        if (!\preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*$/', $class)) {
            throw new \InvalidArgumentException(\sprintf('The environment "%s" contains invalid characters, it can only contain characters allowed in PHP class names.', $this->environment));
        }
        return $class;
    }
    /**
     * Gets the container's base class.
     *
     * All names except Container must be fully qualified.
     *
     * @return string
     */
    protected function getContainerBaseClass()
    {
        return 'Container';
    }
    /**
     * Initializes the service container.
     *
     * The cached version of the service container is used when fresh, otherwise the
     * container is built.
     */
    protected function initializeContainer()
    {
        $class = $this->getContainerClass();
        $cacheDir = $this->warmupDir ?: $this->getCacheDir();
        $cache = new \_PhpScoperba481e4bff85\Symfony\Component\Config\ConfigCache($cacheDir . '/' . $class . '.php', $this->debug);
        $cachePath = $cache->getPath();
        // Silence E_WARNING to ignore "include" failures - don't use "@" to prevent silencing fatal errors
        $errorLevel = \error_reporting(\E_ALL ^ \E_WARNING);
        try {
            if (\is_file($cachePath) && \is_object($this->container = (include $cachePath)) && (!$this->debug || (self::$freshCache[$cachePath] ?? $cache->isFresh()))) {
                self::$freshCache[$cachePath] = \true;
                $this->container->set('kernel', $this);
                \error_reporting($errorLevel);
                return;
            }
        } catch (\Throwable $e) {
        }
        $oldContainer = \is_object($this->container) ? new \ReflectionClass($this->container) : ($this->container = null);
        try {
            \is_dir($cacheDir) ?: \mkdir($cacheDir, 0777, \true);
            if ($lock = \fopen($cachePath . '.lock', 'w')) {
                \flock($lock, \LOCK_EX | \LOCK_NB, $wouldBlock);
                if (!\flock($lock, $wouldBlock ? \LOCK_SH : \LOCK_EX)) {
                    \fclose($lock);
                    $lock = null;
                } elseif (!\is_object($this->container = (include $cachePath))) {
                    $this->container = null;
                } elseif (!$oldContainer || \get_class($this->container) !== $oldContainer->name) {
                    \flock($lock, \LOCK_UN);
                    \fclose($lock);
                    $this->container->set('kernel', $this);
                    return;
                }
            }
        } catch (\Throwable $e) {
        } finally {
            \error_reporting($errorLevel);
        }
        if ($collectDeprecations = $this->debug && !\defined('PHPUNIT_COMPOSER_INSTALL')) {
            $collectedLogs = [];
            $previousHandler = \set_error_handler(function ($type, $message, $file, $line) use(&$collectedLogs, &$previousHandler) {
                if (\E_USER_DEPRECATED !== $type && \E_DEPRECATED !== $type) {
                    return $previousHandler ? $previousHandler($type, $message, $file, $line) : \false;
                }
                if (isset($collectedLogs[$message])) {
                    ++$collectedLogs[$message]['count'];
                    return null;
                }
                $backtrace = \debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS, 5);
                // Clean the trace by removing first frames added by the error handler itself.
                for ($i = 0; isset($backtrace[$i]); ++$i) {
                    if (isset($backtrace[$i]['file'], $backtrace[$i]['line']) && $backtrace[$i]['line'] === $line && $backtrace[$i]['file'] === $file) {
                        $backtrace = \array_slice($backtrace, 1 + $i);
                        break;
                    }
                }
                for ($i = 0; isset($backtrace[$i]); ++$i) {
                    if (!isset($backtrace[$i]['file'], $backtrace[$i]['line'], $backtrace[$i]['function'])) {
                        continue;
                    }
                    if (!isset($backtrace[$i]['class']) && 'trigger_deprecation' === $backtrace[$i]['function']) {
                        $file = $backtrace[$i]['file'];
                        $line = $backtrace[$i]['line'];
                        $backtrace = \array_slice($backtrace, 1 + $i);
                        break;
                    }
                }
                // Remove frames added by DebugClassLoader.
                for ($i = \count($backtrace) - 2; 0 < $i; --$i) {
                    if (\in_array($backtrace[$i]['class'] ?? null, [\_PhpScoperba481e4bff85\Symfony\Component\ErrorHandler\DebugClassLoader::class, \_PhpScoperba481e4bff85\Symfony\Component\Debug\DebugClassLoader::class], \true)) {
                        $backtrace = [$backtrace[$i + 1]];
                        break;
                    }
                }
                $collectedLogs[$message] = ['type' => $type, 'message' => $message, 'file' => $file, 'line' => $line, 'trace' => [$backtrace[0]], 'count' => 1];
                return null;
            });
        }
        try {
            $container = null;
            $container = $this->buildContainer();
            $container->compile();
        } finally {
            if ($collectDeprecations) {
                \restore_error_handler();
                \file_put_contents($cacheDir . '/' . $class . 'Deprecations.log', \serialize(\array_values($collectedLogs)));
                \file_put_contents($cacheDir . '/' . $class . 'Compiler.log', null !== $container ? \implode("\n", $container->getCompiler()->getLog()) : '');
            }
        }
        $this->dumpContainer($cache, $container, $class, $this->getContainerBaseClass());
        if ($lock) {
            \flock($lock, \LOCK_UN);
            \fclose($lock);
        }
        $this->container = (require $cachePath);
        $this->container->set('kernel', $this);
        if ($oldContainer && \get_class($this->container) !== $oldContainer->name) {
            // Because concurrent requests might still be using them,
            // old container files are not removed immediately,
            // but on a next dump of the container.
            static $legacyContainers = [];
            $oldContainerDir = \dirname($oldContainer->getFileName());
            $legacyContainers[$oldContainerDir . '.legacy'] = \true;
            foreach (\glob(\dirname($oldContainerDir) . \DIRECTORY_SEPARATOR . '*.legacy', \GLOB_NOSORT) as $legacyContainer) {
                if (!isset($legacyContainers[$legacyContainer]) && @\unlink($legacyContainer)) {
                    (new \_PhpScoperba481e4bff85\Symfony\Component\Filesystem\Filesystem())->remove(\substr($legacyContainer, 0, -7));
                }
            }
            \touch($oldContainerDir . '.legacy');
        }
        $preload = $this instanceof \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface ? (array) $this->warmUp($this->container->getParameter('kernel.cache_dir')) : [];
        if ($this->container->has('cache_warmer')) {
            $preload = \array_merge($preload, (array) $this->container->get('cache_warmer')->warmUp($this->container->getParameter('kernel.cache_dir')));
        }
        if ($preload && \method_exists(\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Dumper\Preloader::class, 'append') && \file_exists($preloadFile = $cacheDir . '/' . $class . '.preload.php')) {
            \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Dumper\Preloader::append($preloadFile, $preload);
        }
    }
    /**
     * Returns the kernel parameters.
     *
     * @return array An array of kernel parameters
     */
    protected function getKernelParameters()
    {
        $bundles = [];
        $bundlesMetadata = [];
        foreach ($this->bundles as $name => $bundle) {
            $bundles[$name] = \get_class($bundle);
            $bundlesMetadata[$name] = ['path' => $bundle->getPath(), 'namespace' => $bundle->getNamespace()];
        }
        return ['kernel.project_dir' => \realpath($this->getProjectDir()) ?: $this->getProjectDir(), 'kernel.environment' => $this->environment, 'kernel.debug' => $this->debug, 'kernel.cache_dir' => \realpath($cacheDir = $this->warmupDir ?: $this->getCacheDir()) ?: $cacheDir, 'kernel.logs_dir' => \realpath($this->getLogDir()) ?: $this->getLogDir(), 'kernel.bundles' => $bundles, 'kernel.bundles_metadata' => $bundlesMetadata, 'kernel.charset' => $this->getCharset(), 'kernel.container_class' => $this->getContainerClass()];
    }
    /**
     * Builds the service container.
     *
     * @return ContainerBuilder The compiled service container
     *
     * @throws \RuntimeException
     */
    protected function buildContainer()
    {
        foreach (['cache' => $this->warmupDir ?: $this->getCacheDir(), 'logs' => $this->getLogDir()] as $name => $dir) {
            if (!\is_dir($dir)) {
                if (\false === @\mkdir($dir, 0777, \true) && !\is_dir($dir)) {
                    throw new \RuntimeException(\sprintf('Unable to create the "%s" directory (%s).', $name, $dir));
                }
            } elseif (!\is_writable($dir)) {
                throw new \RuntimeException(\sprintf('Unable to write in the "%s" directory (%s).', $name, $dir));
            }
        }
        $container = $this->getContainerBuilder();
        $container->addObjectResource($this);
        $this->prepareContainer($container);
        if (null !== ($cont = $this->registerContainerConfiguration($this->getContainerLoader($container)))) {
            $container->merge($cont);
        }
        $container->addCompilerPass(new \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\DependencyInjection\AddAnnotatedClassesToCachePass($this));
        return $container;
    }
    /**
     * Prepares the ContainerBuilder before it is compiled.
     */
    protected function prepareContainer(\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $extensions = [];
        foreach ($this->bundles as $bundle) {
            if ($extension = $bundle->getContainerExtension()) {
                $container->registerExtension($extension);
            }
            if ($this->debug) {
                $container->addObjectResource($bundle);
            }
        }
        foreach ($this->bundles as $bundle) {
            $bundle->build($container);
        }
        $this->build($container);
        foreach ($container->getExtensions() as $extension) {
            $extensions[] = $extension->getAlias();
        }
        // ensure these extensions are implicitly loaded
        $container->getCompilerPassConfig()->setMergePass(new \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\DependencyInjection\MergeExtensionConfigurationPass($extensions));
    }
    /**
     * Gets a new ContainerBuilder instance used to build the service container.
     *
     * @return ContainerBuilder
     */
    protected function getContainerBuilder()
    {
        $container = new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder();
        $container->getParameterBag()->add($this->getKernelParameters());
        if ($this instanceof \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface) {
            $container->addCompilerPass($this, \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Compiler\PassConfig::TYPE_BEFORE_OPTIMIZATION, -10000);
        }
        if (\class_exists('_PhpScoperba481e4bff85\\ProxyManager\\Configuration') && \class_exists('_PhpScoperba481e4bff85\\Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator')) {
            $container->setProxyInstantiator(new \_PhpScoperba481e4bff85\Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\RuntimeInstantiator());
        }
        return $container;
    }
    /**
     * Dumps the service container to PHP code in the cache.
     *
     * @param string $class     The name of the class to generate
     * @param string $baseClass The name of the container's base class
     */
    protected function dumpContainer(\_PhpScoperba481e4bff85\Symfony\Component\Config\ConfigCache $cache, \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder $container, string $class, string $baseClass)
    {
        // cache the container
        $dumper = new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Dumper\PhpDumper($container);
        if (\class_exists('_PhpScoperba481e4bff85\\ProxyManager\\Configuration') && \class_exists('_PhpScoperba481e4bff85\\Symfony\\Bridge\\ProxyManager\\LazyProxy\\PhpDumper\\ProxyDumper')) {
            $dumper->setProxyDumper(new \_PhpScoperba481e4bff85\Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\ProxyDumper());
        }
        $content = $dumper->dump(['class' => $class, 'base_class' => $baseClass, 'file' => $cache->getPath(), 'as_files' => \true, 'debug' => $this->debug, 'build_time' => $container->hasParameter('kernel.container_build_time') ? $container->getParameter('kernel.container_build_time') : \time(), 'preload_classes' => \array_map('get_class', $this->bundles)]);
        $rootCode = \array_pop($content);
        $dir = \dirname($cache->getPath()) . '/';
        $fs = new \_PhpScoperba481e4bff85\Symfony\Component\Filesystem\Filesystem();
        foreach ($content as $file => $code) {
            $fs->dumpFile($dir . $file, $code);
            @\chmod($dir . $file, 0666 & ~\umask());
        }
        $legacyFile = \dirname($dir . \key($content)) . '.legacy';
        if (\file_exists($legacyFile)) {
            @\unlink($legacyFile);
        }
        $cache->write($rootCode, $container->getResources());
    }
    /**
     * Returns a loader for the container.
     *
     * @return DelegatingLoader The loader
     */
    protected function getContainerLoader(\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $locator = new \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Config\FileLocator($this);
        $resolver = new \_PhpScoperba481e4bff85\Symfony\Component\Config\Loader\LoaderResolver([new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\XmlFileLoader($container, $locator), new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\YamlFileLoader($container, $locator), new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\IniFileLoader($container, $locator), new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($container, $locator), new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\GlobFileLoader($container, $locator), new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\DirectoryLoader($container, $locator), new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\ClosureLoader($container)]);
        return new \_PhpScoperba481e4bff85\Symfony\Component\Config\Loader\DelegatingLoader($resolver);
    }
    /**
     * Removes comments from a PHP source string.
     *
     * We don't use the PHP php_strip_whitespace() function
     * as we want the content to be readable and well-formatted.
     *
     * @return string The PHP string with the comments removed
     */
    public static function stripComments(string $source)
    {
        if (!\function_exists('token_get_all')) {
            return $source;
        }
        $rawChunk = '';
        $output = '';
        $tokens = \token_get_all($source);
        $ignoreSpace = \false;
        for ($i = 0; isset($tokens[$i]); ++$i) {
            $token = $tokens[$i];
            if (!isset($token[1]) || 'b"' === $token) {
                $rawChunk .= $token;
            } elseif (\T_START_HEREDOC === $token[0]) {
                $output .= $rawChunk . $token[1];
                do {
                    $token = $tokens[++$i];
                    $output .= isset($token[1]) && 'b"' !== $token ? $token[1] : $token;
                } while (\T_END_HEREDOC !== $token[0]);
                $rawChunk = '';
            } elseif (\T_WHITESPACE === $token[0]) {
                if ($ignoreSpace) {
                    $ignoreSpace = \false;
                    continue;
                }
                // replace multiple new lines with a single newline
                $rawChunk .= \preg_replace(['/\\n{2,}/S'], "\n", $token[1]);
            } elseif (\in_array($token[0], [\T_COMMENT, \T_DOC_COMMENT])) {
                $ignoreSpace = \true;
            } else {
                $rawChunk .= $token[1];
                // The PHP-open tag already has a new-line
                if (\T_OPEN_TAG === $token[0]) {
                    $ignoreSpace = \true;
                }
            }
        }
        $output .= $rawChunk;
        unset($tokens, $rawChunk);
        \gc_mem_caches();
        return $output;
    }
    /**
     * @return array
     */
    public function __sleep()
    {
        return ['environment', 'debug'];
    }
    public function __wakeup()
    {
        $this->__construct($this->environment, $this->debug);
    }
}
