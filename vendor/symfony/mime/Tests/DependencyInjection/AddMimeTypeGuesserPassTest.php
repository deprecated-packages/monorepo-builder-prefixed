<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad5317739bda\Symfony\Component\Mime\Tests\DependencyInjection;

use _PhpScoperad5317739bda\PHPUnit\Framework\TestCase;
use _PhpScoperad5317739bda\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Reference;
use _PhpScoperad5317739bda\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass;
use _PhpScoperad5317739bda\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperad5317739bda\Symfony\Component\Mime\MimeTypes;
class AddMimeTypeGuesserPassTest extends \_PhpScoperad5317739bda\PHPUnit\Framework\TestCase
{
    public function testTags()
    {
        $container = new \_PhpScoperad5317739bda\Symfony\Component\DependencyInjection\ContainerBuilder();
        $container->addCompilerPass(new \_PhpScoperad5317739bda\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass());
        $definition = new \_PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Definition(\_PhpScoperad5317739bda\Symfony\Component\Mime\FileinfoMimeTypeGuesser::class);
        $definition->addArgument('/path/to/magic/file');
        $definition->addTag('mime.mime_type_guesser');
        $container->setDefinition('some_mime_type_guesser', $definition->setPublic(\true));
        $container->register('mime_types', \_PhpScoperad5317739bda\Symfony\Component\Mime\MimeTypes::class)->setPublic(\true);
        $container->compile();
        $router = $container->getDefinition('mime_types');
        $calls = $router->getMethodCalls();
        $this->assertCount(1, $calls);
        $this->assertEquals('registerGuesser', $calls[0][0]);
        $this->assertEquals(new \_PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Reference('some_mime_type_guesser'), $calls[0][1][0]);
    }
}
