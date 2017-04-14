<?php

namespace MauticPlugin\MauticTestBundle\Model;

use Mautic\CoreBundle\Model\FormModel;
use MauticPlugin\MauticTestBundle\Entity\Something;
use MauticPlugin\MauticSocialBundle\Event as Events;

/**
 * Class MonitoringModel
 * {@inheritdoc}
 */
class SomethingModel extends FormModel
{
    /**
     * {@inheritdoc}
     *
     * @param       $entity
     * @param       $formFactory
     * @param array $options
     *
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function createSomething($name, $value)
    {

    }

    /**
     * Get a specific entity or generate a new one if id is empty.
     *
     * @param $id
     *
     * @return null|object
     */
    public function getEntity($id = null)
    {
        if ($id === null) {
            $entity = new Something();
        } else {
            $entity = parent::getEntity($id);
        }

        return $entity;
    }
    /**
     * {@inheritdoc}
     *
     * @var \MauticPlugin\MauticSocialBundle\Entity\Monitoring
     */
    public function saveEntity($somethingEntity, $unlock = true)
    {

        parent::saveEntity($somethingEntity, $unlock);
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository()
    {
        return $this->em->getRepository('MauticTestBundle:Something');
    }
}
