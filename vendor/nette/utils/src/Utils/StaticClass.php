<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperdd9048e10aae\Nette;

/**
 * Static class.
 */
trait StaticClass
{
    /** @throws \Error */
    public final function __construct()
    {
        throw new \Error('Class ' . \get_class($this) . ' is static and cannot be instantiated.');
    }
    /**
     * Call to undefined static method.
     * @return void
     * @throws MemberAccessException
     */
    public static function __callStatic(string $name, array $args)
    {
        \_PhpScoperdd9048e10aae\Nette\Utils\ObjectHelpers::strictStaticCall(static::class, $name);
    }
}
