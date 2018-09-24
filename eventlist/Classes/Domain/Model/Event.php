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
 * Veranstaltungen
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Name der Veranstaltung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $eventName = '';

    /**
     * Ort der Veranstaltung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $eventLocation = '';

    /**
     * Beginn der Veranstaltung
     * 
     * @var \DateTime
     */
    protected $eventDate = null;

    /**
     * Verlinkung zu weiteren Veranstaltungsinfos
     * 
     * @var string
     */
    protected $eventLink = '';

    /**
     * Kurze Beschreibung des Veranstaltungsinhalts/Programms
     * 
     * @var string
     */
    protected $eventDescription = '';

    /**
     * Veranstalter
     * 
     * @var \Tug\Eventlist\Domain\Model\Veranstalter
     * @lazy
     */
    protected $veranstalter = null;

    /**
     * Veranstaltungstags
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tug\Eventlist\Domain\Model\Tag>
     * @lazy
     */
    protected $tags = null;

    /**
     * Returns the eventName
     * 
     * @return string $eventName
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Sets the eventName
     * 
     * @param string $eventName
     * @return void
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * Returns the eventLocation
     * 
     * @return string $eventLocation
     */
    public function getEventLocation()
    {
        return $this->eventLocation;
    }

    /**
     * Sets the eventLocation
     * 
     * @param string $eventLocation
     * @return void
     */
    public function setEventLocation($eventLocation)
    {
        $this->eventLocation = $eventLocation;
    }

    /**
     * Returns the eventDate
     * 
     * @return \DateTime $eventDate
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Sets the eventDate
     * 
     * @param \DateTime $eventDate
     * @return void
     */
    public function setEventDate(\DateTime $eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * Returns the eventLink
     * 
     * @return string $eventLink
     */
    public function getEventLink()
    {
        return $this->eventLink;
    }

    /**
     * Sets the eventLink
     * 
     * @param string $eventLink
     * @return void
     */
    public function setEventLink($eventLink)
    {
        $this->eventLink = $eventLink;
    }

    /**
     * Returns the eventDescription
     * 
     * @return string $eventDescription
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * Sets the eventDescription
     * 
     * @param string $eventDescription
     * @return void
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the veranstalter
     * 
     * @return \Tug\Eventlist\Domain\Model\Veranstalter $veranstalter
     */
    public function getVeranstalter()
    {
        return $this->veranstalter;
    }

    /**
     * Sets the veranstalter
     * 
     * @param \Tug\Eventlist\Domain\Model\Veranstalter $veranstalter
     * @return void
     */
    public function setVeranstalter(\Tug\Eventlist\Domain\Model\Veranstalter $veranstalter)
    {
        $this->veranstalter = $veranstalter;
    }

    /**
     * Adds a Tag
     * 
     * @param \Tug\Eventlist\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Tug\Eventlist\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     * 
     * @param \Tug\Eventlist\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Tug\Eventlist\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tug\Eventlist\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tug\Eventlist\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }
}
