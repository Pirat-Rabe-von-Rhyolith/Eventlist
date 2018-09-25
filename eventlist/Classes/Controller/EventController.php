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
 * EventController
 */
class EventController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * eventRepository
     * 
     * @var \Tug\Eventlist\Domain\Repository\EventRepository
     * @inject
     */
    protected $eventRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $events = $this->eventRepository->findAll();
        $this->view->assign('events', $events);
    }

    /**
     * action show
     * 
     * @param \Tug\Eventlist\Domain\Model\Event $event
     * @return void
     */
    public function showAction(\Tug\Eventlist\Domain\Model\Event $event)
    {
        $this->view->assign('event', $event);
    }
}
