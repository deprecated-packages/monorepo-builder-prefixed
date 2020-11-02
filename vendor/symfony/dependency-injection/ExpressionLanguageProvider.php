<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection;

use _PhpScoperabb8c88e9df1\Symfony\Component\ExpressionLanguage\ExpressionFunction;
use _PhpScoperabb8c88e9df1\Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
/**
 * Define some ExpressionLanguage functions.
 *
 * To get a service, use service('request').
 * To get a parameter, use parameter('kernel.debug').
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionLanguageProvider implements \_PhpScoperabb8c88e9df1\Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface
{
    private $serviceCompiler;
    public function __construct(callable $serviceCompiler = null)
    {
        $this->serviceCompiler = $serviceCompiler;
    }
    public function getFunctions()
    {
        return [new \_PhpScoperabb8c88e9df1\Symfony\Component\ExpressionLanguage\ExpressionFunction('service', $this->serviceCompiler ?: function ($arg) {
            return \sprintf('$this->get(%s)', $arg);
        }, function (array $variables, $value) {
            return $variables['container']->get($value);
        }), new \_PhpScoperabb8c88e9df1\Symfony\Component\ExpressionLanguage\ExpressionFunction('parameter', function ($arg) {
            return \sprintf('$this->getParameter(%s)', $arg);
        }, function (array $variables, $value) {
            return $variables['container']->getParameter($value);
        })];
    }
}
