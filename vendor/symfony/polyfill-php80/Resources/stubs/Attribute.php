<?php

namespace _PhpScoper9122d33f3e27;

#[Attribute(\Attribute::TARGET_CLASS)]
final class Attribute
{
    const TARGET_CLASS = 1;
    const TARGET_FUNCTION = 2;
    const TARGET_METHOD = 4;
    const TARGET_PROPERTY = 8;
    const TARGET_CLASS_CONSTANT = 16;
    const TARGET_PARAMETER = 32;
    const TARGET_ALL = 63;
    const IS_REPEATABLE = 64;
    /** @var int */
    public $flags;
    public function __construct(int $flags = \Attribute::TARGET_ALL)
    {
        $this->flags = $flags;
    }
}
\class_alias('_PhpScoper9122d33f3e27\\Attribute', 'Attribute', \false);
