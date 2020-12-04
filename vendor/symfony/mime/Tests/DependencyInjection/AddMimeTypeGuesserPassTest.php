<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper56e9de378e59\Symfony\Component\Mime\Tests\DependencyInjection;

use _PhpScoper56e9de378e59\PHPUnit\Framework\TestCase;
use _PhpScoper56e9de378e59\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper56e9de378e59\Symfony\Component\DependencyInjection\Definition;
use _PhpScoper56e9de378e59\Symfony\Component\DependencyInjection\Reference;
use _PhpScoper56e9de378e59\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass;
use _PhpScoper56e9de378e59\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoper56e9de378e59\Symfony\Component\Mime\MimeTypes;
class AddMimeTypeGuesserPassTest extends \_PhpScoper56e9de378e59\PHPUnit\Framework\TestCase
{
    public function testTags()
    {
        $container = new \_PhpScoper56e9de378e59\Symfony\Component\DependencyInjection\ContainerBuilder();
        $container->addCompilerPass(new \_PhpScoper56e9de378e59\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass());
        $definition = new \_PhpScoper56e9de378e59\Symfony\Component\DependencyInjection\Definition(\_PhpScoper56e9de378e59\Symfony\Component\Mime\FileinfoMimeTypeGuesser::class);
        $definition->addArgument('/path/to/magic/file');
        $definition->addTag('mime.mime_type_guesser');
        $container->setDefinition('some_mime_type_guesser', $definition->setPublic(\true));
        $container->register('mime_types', \_PhpScoper56e9de378e59\Symfony\Component\Mime\MimeTypes::class)->setPublic(\true);
        $container->compile();
        $router = $container->getDefinition('mime_types');
        $calls = $router->getMethodCalls();
        $this->assertCount(1, $calls);
        $this->assertEquals('registerGuesser', $calls[0][0]);
        $this->assertEquals(new \_PhpScoper56e9de378e59\Symfony\Component\DependencyInjection\Reference('some_mime_type_guesser'), $calls[0][1][0]);
    }
}
