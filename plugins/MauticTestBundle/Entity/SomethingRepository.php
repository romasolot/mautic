<?php

namespace MauticPlugin\MauticTestBundle\Entity;

use Mautic\CoreBundle\Entity\CommonRepository;

class SomethingRepository extends CommonRepository
{

    public function getEntities($args = array())
    {
        $q = $this->createQueryBuilder('w');

        $args['qb'] = $q;

        return parent::getEntities($args);
    }
}