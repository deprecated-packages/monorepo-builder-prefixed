<?php

declare (strict_types=1);
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9e30392f4506\PharIo\Version;

class VersionNumber
{
    /** @var ?int */
    private $value;
    public function __construct(?int $value)
    {
        $this->value = $value;
    }
    public function isAny() : bool
    {
        return $this->value === null;
    }
    public function getValue() : ?int
    {
        return $this->value;
    }
}
