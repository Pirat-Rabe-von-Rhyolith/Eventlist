<?php
namespace Tug\Eventlist\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Stefan Reiss <stefan.reiss@phth.de>
 */
class TagTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Tug\Eventlist\Domain\Model\Tag
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Tug\Eventlist\Domain\Model\Tag();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTagValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTagValue()
        );
    }

    /**
     * @test
     */
    public function setTagValueForStringSetsTagValue()
    {
        $this->subject->setTagValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tagValue',
            $this->subject
        );
    }
}
