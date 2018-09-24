<?php
namespace Tug\Eventlist\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Stefan Reiss <stefan.reiss@phth.de>
 */
class EventTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Tug\Eventlist\Domain\Model\Event
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Tug\Eventlist\Domain\Model\Event();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getEventNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventName()
        );
    }

    /**
     * @test
     */
    public function setEventNameForStringSetsEventName()
    {
        $this->subject->setEventName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEventLocationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventLocation()
        );
    }

    /**
     * @test
     */
    public function setEventLocationForStringSetsEventLocation()
    {
        $this->subject->setEventLocation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventLocation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEventDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEventDate()
        );
    }

    /**
     * @test
     */
    public function setEventDateForDateTimeSetsEventDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEventDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'eventDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEventLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventLink()
        );
    }

    /**
     * @test
     */
    public function setEventLinkForStringSetsEventLink()
    {
        $this->subject->setEventLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventLink',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEventDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventDescription()
        );
    }

    /**
     * @test
     */
    public function setEventDescriptionForStringSetsEventDescription()
    {
        $this->subject->setEventDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventDescription',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVeranstalterReturnsInitialValueForVeranstalter()
    {
        self::assertEquals(
            null,
            $this->subject->getVeranstalter()
        );
    }

    /**
     * @test
     */
    public function setVeranstalterForVeranstalterSetsVeranstalter()
    {
        $veranstalterFixture = new \Tug\Eventlist\Domain\Model\Veranstalter();
        $this->subject->setVeranstalter($veranstalterFixture);

        self::assertAttributeEquals(
            $veranstalterFixture,
            'veranstalter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTagsReturnsInitialValueForTag()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTags()
        );
    }

    /**
     * @test
     */
    public function setTagsForObjectStorageContainingTagSetsTags()
    {
        $tag = new \Tug\Eventlist\Domain\Model\Tag();
        $objectStorageHoldingExactlyOneTags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTags->attach($tag);
        $this->subject->setTags($objectStorageHoldingExactlyOneTags);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTags,
            'tags',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTagToObjectStorageHoldingTags()
    {
        $tag = new \Tug\Eventlist\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->addTag($tag);
    }

    /**
     * @test
     */
    public function removeTagFromObjectStorageHoldingTags()
    {
        $tag = new \Tug\Eventlist\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->removeTag($tag);
    }
}
