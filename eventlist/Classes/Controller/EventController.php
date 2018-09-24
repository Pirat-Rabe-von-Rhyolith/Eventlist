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

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \Tug\Eventlist\Domain\Model\Event $newEvent
     * @return void
     */
    public function createAction(\Tug\Eventlist\Domain\Model\Event $newEvent)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->eventRepository->add($newEvent);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Tug\Eventlist\Domain\Model\Event $event
     * @ignorevalidation $event
     * @return void
     */
    public function editAction(\Tug\Eventlist\Domain\Model\Event $event)
    {
        $this->view->assign('event', $event);
    }

    /**
     * action update
     * 
     * @param \Tug\Eventlist\Domain\Model\Event $event
     * @return void
     */
    public function updateAction(\Tug\Eventlist\Domain\Model\Event $event)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->eventRepository->update($event);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Tug\Eventlist\Domain\Model\Event $event
     * @return void
     */
    public function deleteAction(\Tug\Eventlist\Domain\Model\Event $event)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->eventRepository->remove($event);
        $this->redirect('list');
    }
}
