<?php
namespace Tug\Eventlist\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Stefan Reiss <stefan.reiss@phth.de>
 */
class LocationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Tug\Eventlist\Domain\Model\Location
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Tug\Eventlist\Domain\Model\Location();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCoordinatesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCoordinates()
        );
    }

    /**
     * @test
     */
    public function setCoordinatesForStringSetsCoordinates()
    {
        $this->subject->setCoordinates('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'coordinates',
            $this->subject
        );
    }
}
