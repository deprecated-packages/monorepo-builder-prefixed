<?php

declare (strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab93339c6bca\SebastianBergmann\Diff;

use _PhpScoperab93339c6bca\PHPUnit\Framework\TestCase;
/**
 * @covers SebastianBergmann\Diff\ConfigurationException
 */
final class ConfigurationExceptionTest extends \_PhpScoperab93339c6bca\PHPUnit\Framework\TestCase
{
    public function testConstructWithDefaults() : void
    {
        $e = new \_PhpScoperab93339c6bca\SebastianBergmann\Diff\ConfigurationException('test', 'A', 'B');
        $this->assertSame(0, $e->getCode());
        $this->assertNull($e->getPrevious());
        $this->assertSame('Option "test" must be A, got "string#B".', $e->getMessage());
    }
    public function testConstruct() : void
    {
        $e = new \_PhpScoperab93339c6bca\SebastianBergmann\Diff\ConfigurationException('test', 'integer', new \SplFileInfo(__FILE__), 789, new \BadMethodCallException(__METHOD__));
        $this->assertSame('Option "test" must be integer, got "SplFileInfo".', $e->getMessage());
    }
}
