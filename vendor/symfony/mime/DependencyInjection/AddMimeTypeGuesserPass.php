<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper53a6895b9c5b\Symfony\Component\Mime\DependencyInjection;

use _PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\Reference;
/**
 * Registers custom mime types guessers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class AddMimeTypeGuesserPass implements \_PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $mimeTypesService;
    private $mimeTypeGuesserTag;
    public function __construct(string $mimeTypesService = 'mime_types', string $mimeTypeGuesserTag = 'mime.mime_type_guesser')
    {
        $this->mimeTypesService = $mimeTypesService;
        $this->mimeTypeGuesserTag = $mimeTypeGuesserTag;
    }
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if ($container->has($this->mimeTypesService)) {
            $definition = $container->findDefinition($this->mimeTypesService);
            foreach ($container->findTaggedServiceIds($this->mimeTypeGuesserTag, \true) as $id => $attributes) {
                $definition->addMethodCall('registerGuesser', [new \_PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\Reference($id)]);
            }
        }
    }
}
