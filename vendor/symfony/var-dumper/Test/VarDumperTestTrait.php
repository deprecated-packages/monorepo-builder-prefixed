<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere846b54512fc\Symfony\Component\VarDumper\Test;

use _PhpScopere846b54512fc\Symfony\Component\VarDumper\Cloner\VarCloner;
use _PhpScopere846b54512fc\Symfony\Component\VarDumper\Dumper\CliDumper;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait VarDumperTestTrait
{
    /**
     * @internal
     */
    private $varDumperConfig = ['casters' => [], 'flags' => null];
    protected function setUpVarDumper(array $casters, int $flags = null) : void
    {
        $this->varDumperConfig['casters'] = $casters;
        $this->varDumperConfig['flags'] = $flags;
    }
    /**
     * @after
     */
    protected function tearDownVarDumper() : void
    {
        $this->varDumperConfig['casters'] = [];
        $this->varDumperConfig['flags'] = null;
    }
    public function assertDumpEquals($expected, $data, $filter = 0, $message = '')
    {
        $this->assertSame($this->prepareExpectation($expected, $filter), $this->getDump($data, null, $filter), $message);
    }
    public function assertDumpMatchesFormat($expected, $data, $filter = 0, $message = '')
    {
        $this->assertStringMatchesFormat($this->prepareExpectation($expected, $filter), $this->getDump($data, null, $filter), $message);
    }
    /**
     * @return string|null
     */
    protected function getDump($data, $key = null, $filter = 0)
    {
        if (null === ($flags = $this->varDumperConfig['flags'])) {
            $flags = \getenv('DUMP_LIGHT_ARRAY') ? \_PhpScopere846b54512fc\Symfony\Component\VarDumper\Dumper\CliDumper::DUMP_LIGHT_ARRAY : 0;
            $flags |= \getenv('DUMP_STRING_LENGTH') ? \_PhpScopere846b54512fc\Symfony\Component\VarDumper\Dumper\CliDumper::DUMP_STRING_LENGTH : 0;
            $flags |= \getenv('DUMP_COMMA_SEPARATOR') ? \_PhpScopere846b54512fc\Symfony\Component\VarDumper\Dumper\CliDumper::DUMP_COMMA_SEPARATOR : 0;
        }
        $cloner = new \_PhpScopere846b54512fc\Symfony\Component\VarDumper\Cloner\VarCloner();
        $cloner->addCasters($this->varDumperConfig['casters']);
        $cloner->setMaxItems(-1);
        $dumper = new \_PhpScopere846b54512fc\Symfony\Component\VarDumper\Dumper\CliDumper(null, null, $flags);
        $dumper->setColors(\false);
        $data = $cloner->cloneVar($data, $filter)->withRefHandles(\false);
        if (null !== $key && null === ($data = $data->seek($key))) {
            return null;
        }
        return \rtrim($dumper->dump($data, \true));
    }
    private function prepareExpectation($expected, int $filter) : string
    {
        if (!\is_string($expected)) {
            $expected = $this->getDump($expected, null, $filter);
        }
        return \rtrim($expected);
    }
}
