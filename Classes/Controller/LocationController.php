<?php
namespace Tug\Eventlist\Controller;

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
 * LocationController
 */
class LocationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * locationRepository
     * 
     * @var \Tug\Eventlist\Domain\Repository\LocationRepository
     * @inject
     */
    protected $locationRepository;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $locations = $this->locationRepository->findAll();
        $this->view->assign('locations', $locations);
    }

    /**
     * action show
     *
     * @param \Tug\Eventlist\Domain\Model\Location $location
     */
    public function showAction(\Tug\Eventlist\Domain\Model\Location $location)
    {
        $this->view->assign('location', $location);
    }
}
