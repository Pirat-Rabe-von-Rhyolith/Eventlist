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
    protected $eventRepository;

    /**
     * Persistence Manager
     *
     * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     * @inject
     */

    protected $persistenceManager;


    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    { if ($this->request->hasArgument('search')){
        $search=$this->request->getArgument('search');
    }

        $this->view->assign('events', $this->eventRepository->findSearch($search));

       /* $events = $this->eventRepository->findAll();
        $this->view->assign('events', $events);*/
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

    /**
     * action tag
     * 
     * @return void
     */
    public function tagAction(\Tug\Eventlist\Domain\Model\Event $event)
    {   $this->view->assign ('event', $event);
        $this->view->assign('tags', $this->objectManager->get('Tug\\Eventlist\\Domain\\Repository\\TagRepository')->findAll());

    }
}
