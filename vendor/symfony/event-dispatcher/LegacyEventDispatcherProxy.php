<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd3e9cfbe9d90\Symfony\Component\EventDispatcher;

use _PhpScoperd3e9cfbe9d90\Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
trigger_deprecation('symfony/event-dispatcher', '5.1', '%s is deprecated, use the event dispatcher without the proxy.', \_PhpScoperd3e9cfbe9d90\Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy::class);
/**
 * A helper class to provide BC/FC with the legacy signature of EventDispatcherInterface::dispatch().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @deprecated since Symfony 5.1
 */
final class LegacyEventDispatcherProxy
{
    public static function decorate(?\_PhpScoperd3e9cfbe9d90\Symfony\Contracts\EventDispatcher\EventDispatcherInterface $dispatcher) : ?\_PhpScoperd3e9cfbe9d90\Symfony\Contracts\EventDispatcher\EventDispatcherInterface
    {
        return $dispatcher;
    }
}
