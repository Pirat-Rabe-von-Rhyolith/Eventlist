<?php
/**
 * Created by PhpStorm.
 * User: Stefan Reiss
 * Date: 01.10.2018
 * Time: 12:24
 */

namespace Tug\Eventlist\ViewHelpers\Widget;


class TagSortViewHelper extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper
{
    /**
     * @var \Tug\Eventlist\ViewHelpers\Widget\Controller\TagSortController
     * @inject
     */

    protected $controller;

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\QueryResultInterface $objects
     * @param string $as
     * @param string $property
     * @return string
     */

    public function render(\TYPO3\CMS\Extbase\Persistence\QueryResultInterface $objects, $as,$property){
        return $this->initiateSubRequest ();
    }

}