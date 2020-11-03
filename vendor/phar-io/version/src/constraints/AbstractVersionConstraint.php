<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf1163522a13e\PharIo\Version;

abstract class AbstractVersionConstraint implements \_PhpScoperf1163522a13e\PharIo\Version\VersionConstraint
{
    /**
     * @var string
     */
    private $originalValue = '';
    /**
     * @param string $originalValue
     */
    public function __construct($originalValue)
    {
        $this->originalValue = $originalValue;
    }
    /**
     * @return string
     */
    public function asString()
    {
        return $this->originalValue;
    }
}
