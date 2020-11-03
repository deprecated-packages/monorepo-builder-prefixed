<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Compiler;

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.2.', \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Compiler\RepeatedPass::class), \E_USER_DEPRECATED);
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
/**
 * A pass that might be run repeatedly.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @deprecated since Symfony 4.2.
 */
class RepeatedPass implements \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * @var bool
     */
    private $repeat = \false;
    private $passes;
    /**
     * @param RepeatablePassInterface[] $passes An array of RepeatablePassInterface objects
     *
     * @throws InvalidArgumentException when the passes don't implement RepeatablePassInterface
     */
    public function __construct(array $passes)
    {
        foreach ($passes as $pass) {
            if (!$pass instanceof \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Compiler\RepeatablePassInterface) {
                throw new \_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException('$passes must be an array of RepeatablePassInterface.');
            }
            $pass->setRepeatedPass($this);
        }
        $this->passes = $passes;
    }
    /**
     * Process the repeatable passes that run more than once.
     */
    public function process(\_PhpScoperd4e30d8318e8\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        do {
            $this->repeat = \false;
            foreach ($this->passes as $pass) {
                $pass->process($container);
            }
        } while ($this->repeat);
    }
    /**
     * Sets if the pass should repeat.
     */
    public function setRepeat()
    {
        $this->repeat = \true;
    }
    /**
     * Returns the passes.
     *
     * @return RepeatablePassInterface[] An array of RepeatablePassInterface objects
     */
    public function getPasses()
    {
        return $this->passes;
    }
}
