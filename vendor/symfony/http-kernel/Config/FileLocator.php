<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper30f4a2553084\Symfony\Component\HttpKernel\Config;

use _PhpScoper30f4a2553084\Symfony\Component\Config\FileLocator as BaseFileLocator;
use _PhpScoper30f4a2553084\Symfony\Component\HttpKernel\KernelInterface;
/**
 * FileLocator uses the KernelInterface to locate resources in bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator extends \_PhpScoper30f4a2553084\Symfony\Component\Config\FileLocator
{
    private $kernel;
    /**
     * @deprecated since Symfony 4.4
     */
    private $path;
    public function __construct(\_PhpScoper30f4a2553084\Symfony\Component\HttpKernel\KernelInterface $kernel)
    {
        $this->kernel = $kernel;
        if (2 <= \func_num_args()) {
            $this->path = \func_get_arg(1);
            $paths = 3 <= \func_num_args() ? \func_get_arg(2) : [];
            if (null !== $this->path) {
                $paths[] = $this->path;
            }
            if (4 !== \func_num_args() || \func_get_arg(3)) {
                @\trigger_error(\sprintf('Passing more than one argument to %s is deprecated since Symfony 4.4 and will be removed in 5.0.', __METHOD__), \E_USER_DEPRECATED);
            }
        } else {
            $paths = [];
        }
        parent::__construct($paths);
    }
    /**
     * {@inheritdoc}
     */
    public function locate($file, $currentPath = null, $first = \true)
    {
        if (isset($file[0]) && '@' === $file[0]) {
            return $this->kernel->locateResource($file, $this->path, $first, \false);
        }
        $locations = parent::locate($file, $currentPath, $first);
        if (isset($file[0]) && !('/' === $file[0] || '\\' === $file[0] || \strlen($file) > 3 && \ctype_alpha($file[0]) && ':' === $file[1] && ('\\' === $file[2] || '/' === $file[2]) || null !== \parse_url($file, \PHP_URL_SCHEME))) {
            // no need to trigger deprecations when the loaded file is given as absolute path
            foreach ($this->paths as $deprecatedPath) {
                if (\is_array($locations)) {
                    foreach ($locations as $location) {
                        if (0 === \strpos($location, $deprecatedPath) && (null === $currentPath || \false === \strpos($location, $currentPath))) {
                            @\trigger_error(\sprintf('Loading the file "%s" from the global resource directory "%s" is deprecated since Symfony 4.4 and will be removed in 5.0.', $file, $deprecatedPath), \E_USER_DEPRECATED);
                        }
                    }
                } else {
                    if (0 === \strpos($locations, $deprecatedPath) && (null === $currentPath || \false === \strpos($locations, $currentPath))) {
                        @\trigger_error(\sprintf('Loading the file "%s" from the global resource directory "%s" is deprecated since Symfony 4.4 and will be removed in 5.0.', $file, $deprecatedPath), \E_USER_DEPRECATED);
                    }
                }
            }
        }
        return $locations;
    }
}
