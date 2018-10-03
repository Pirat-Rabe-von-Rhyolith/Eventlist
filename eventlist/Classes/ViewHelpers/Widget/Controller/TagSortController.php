<?php
/**
 * Created by PhpStorm.
 * User: Stefan Reiss
 * Date: 01.10.2018
 * Time: 12:39
 */

namespace Tug\Eventlist\ViewHelpers\Widget\Controller;


class TagSortController extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetController
{
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    protected $objects;

    public function initializeAction(){
        $this->objects = $this->widgetConfiguration['objects'];
    }

    /**
     * @param string $order
     */

    public function indexAction($char='%') {
        $query=$this->objects->getQuery();
        $query->matching($query->like ($this->widgetConfiguration['property'],$char,'%'));
        $modifiedObjects=$query->execute();

        $this->view->assign('contentArguments', array($this->widgetConfiguration['as']=>$modifiedObjects));
        $tags=$this->objectManager->get('Tug\\Eventlist\\Domain\\Repository\\TagRepository');
        foreach ( $tags as $category) {
            $categorys[]=$category;
        }
        $this->view->assign ('categorys',$categorys);
        $this->view->assign ('char',$char);

    }

}