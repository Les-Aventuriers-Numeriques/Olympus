<?php

namespace Easy\ChatBundle\Entity;

use Doctrine\ORM\EntityRepository;

class MessageRepository extends EntityRepository
{
    public function findAllFiltered($is_admin = false)
    {
        $q = $this->createQueryBuilder('m');
        
        if (!$is_admin) {
            $q->where('m.isDeleted = :is_deleted')->setParameter('is_deleted', false);
        }

        $q->setMaxResults(25);
        $q->orderBy('m.timestamp', 'ASC');
        
        return $q->getQuery()->getResult();
    }
}
