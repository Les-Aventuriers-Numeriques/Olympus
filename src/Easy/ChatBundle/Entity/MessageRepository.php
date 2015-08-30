<?php

namespace Easy\ChatBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use JsonSerializable;

class MessageRepository extends EntityRepository
{
    public function findAllFiltered($is_admin = false, $offset = 0)
    {
        $q = $this->createQueryBuilder('m');
        
        if (!$is_admin) {
            $q->where('m.isDeleted = :is_deleted')->setParameter('is_deleted', false);
        }

        if ($offset != 0) {
            $q->setFirstResult($offset);
        }

        $q->setMaxResults(30);
        $q->orderBy('m.timestamp', 'DESC');
        
        return array_reverse($q->getQuery()->getResult(), true);
    }
    
    public function getLastFiveMessages()
    {
        $q = $this->createQueryBuilder('m');
        $q->where('m.isDeleted = :is_deleted')->setParameter('is_deleted', false);
        $q->orderBy('m.timestamp', 'DESC');
        $q->setMaxResults(5);

        return array_values($q->getQuery()->getResult());
    }
}
