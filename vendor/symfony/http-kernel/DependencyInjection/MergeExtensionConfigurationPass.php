<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Compiler\MergeExtensionConfigurationPass as BaseMergeExtensionConfigurationPass;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Ensures certain extensions are always loaded.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class MergeExtensionConfigurationPass extends \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Compiler\MergeExtensionConfigurationPass
{
    private $extensions;
    public function __construct(array $extensions)
    {
        $this->extensions = $extensions;
    }
    public function process(\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        foreach ($this->extensions as $extension) {
            if (!\count($container->getExtensionConfig($extension))) {
                $container->loadFromExtension($extension, []);
            }
        }
        parent::process($container);
    }
}
