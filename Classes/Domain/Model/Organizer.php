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
 * Veranstalter
 */
class Organizer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Name des Veranstalters
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $fullName = '';

    /**
     * Emailadresse des Veranstalters
     * 
     * @var string
     */
    protected $email = '';

    /**
     * Link zur Website des Veranstalters
     * 
     * @var string
     */
    protected $link = '';

    /**
     * Returns the fullName
     * 
     * @return string $fullName
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets the fullName
     * 
     * @param string $fullName
     * @return void
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the link
     * 
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     * 
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
}
