<?php
namespace Tug\Eventlist\Domain\Repository;

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
 * The repository for Events
 */
class EventRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param string $search
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */

    public function findSearch($search){
        $query=$this->createQuery();
        $query->matching(
            $query->like('name','%'.$search.'%')
        );
        $query->setOrderings(array('name'=>\TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
        return $query->execute();
    }
}
