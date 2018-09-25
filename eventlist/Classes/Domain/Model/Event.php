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
    protected $name = '';

    /**
     * Beginn der Veranstaltung
     * 
     * @var \DateTime
     */
    protected $beginning = null;

    /**
     * Verlinkung zu weiteren Veranstaltungsinfos
     * 
     * @var string
     */
    protected $link = '';

    /**
     * Kurze Beschreibung des Veranstaltungsinhalts/Programms
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Ort
     * 
     * @var \Tug\Eventlist\Domain\Model\Location
     * @lazy
     */
    protected $location = null;

    /**
     * Veranstalter
     * 
     * @var \Tug\Eventlist\Domain\Model\Organizer
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

    /**
     * Returns the location
     * 
     * @return \Tug\Eventlist\Domain\Model\Location $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     * 
     * @param \Tug\Eventlist\Domain\Model\Location $location
     * @return void
     */
    public function setLocation(\Tug\Eventlist\Domain\Model\Location $location)
    {
        $this->location = $location;
    }

    /**
     * Returns the name
     * 
     * @return string name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the beginning
     * 
     * @return \DateTime beginning
     */
    public function getBeginning()
    {
        return $this->beginning;
    }

    /**
     * Sets the beginning
     * 
     * @param \DateTime $beginning
     * @return void
     */
    public function setBeginning(\DateTime $beginning)
    {
        $this->beginning = $beginning;
    }

    /**
     * Returns the link
     * 
     * @return string link
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

    /**
     * Returns the description
     * 
     * @return string description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the veranstalter
     * 
     * @return \Tug\Eventlist\Domain\Model\Organizer veranstalter
     */
    public function getVeranstalter()
    {
        return $this->veranstalter;
    }

    /**
     * Sets the veranstalter
     * 
     * @param \Tug\Eventlist\Domain\Model\Organizer $veranstalter
     * @return void
     */
    public function setVeranstalter(\Tug\Eventlist\Domain\Model\Organizer $veranstalter)
    {
        $this->veranstalter = $veranstalter;
    }
}
