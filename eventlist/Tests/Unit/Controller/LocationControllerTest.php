<?php
namespace Tug\Eventlist\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Stefan Reiss <stefan.reiss@phth.de>
 */
class LocationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Tug\Eventlist\Controller\LocationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Tug\Eventlist\Controller\LocationController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllLocationsFromRepositoryAndAssignsThemToView()
    {

        $allLocations = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $locationRepository = $this->getMockBuilder(\Tug\Eventlist\Domain\Repository\LocationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $locationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allLocations));
        $this->inject($this->subject, 'locationRepository', $locationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('locations', $allLocations);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenLocationToView()
    {
        $location = new \Tug\Eventlist\Domain\Model\Location();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('location', $location);

        $this->subject->showAction($location);
    }
}
