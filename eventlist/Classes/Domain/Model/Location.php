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
 * Ort
 */
class Location extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Adresse der Veranstaltung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $address = '';

    /**
     * Koordinaten der Adresse
     * 
     * @var string
     */
    protected $coordinates = '';

    /**
     * Returns the address
     * 
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the coordinates
     * 
     * @return string $coordinates
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Sets the coordinates
     * 
     * @param string $coordinates
     * @return void
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;
    }
}
