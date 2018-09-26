<?php
namespace Tug\Eventlist\Domain\Model;

/***
 *
 * This file is part of the "Eventlist Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Stefan Reiss <stefan.reiss@phth.de>, phth
 *
 ***/

/**
 * Tags
 */
class Tag extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * Tag-Wert
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $value = '';

    /**
     * Returns the value
     * 
     * @return string value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     * 
     * @param string $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
