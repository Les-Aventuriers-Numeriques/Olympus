<?php

namespace Easy\ChatBundle\Entity;

use Doctrine\ORM\EntityRepository;

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
}
