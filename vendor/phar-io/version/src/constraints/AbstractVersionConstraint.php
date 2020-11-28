<?php

/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\PharIo\Version;

abstract class AbstractVersionConstraint implements \_PhpScoperbe77f3b0e77d\PharIo\Version\VersionConstraint
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
