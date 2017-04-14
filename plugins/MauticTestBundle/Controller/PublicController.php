<?php

namespace MauticPlugin\MauticTestBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;
use Doctrine\ORM\Mapping\ClassMetadata;
use MauticPlugin\MauticTestBundle\Entity\Something;
use Symfony\Component\HttpFoundation\Response;

class PublicController extends CommonController
{
    public function testAction()
    {
        $model = $this->getModel('mautictest.something');

        /*$entity  = $model->getEntity();
        $entity->setName('name111');
        $entity->setValue('Value');
        $model->saveEntity($entity);
        echo "<pre>"; var_dump(); echo "</pre>";exit;*/
        $somethingItems = $model->getEntities();
        return $this->delegateView(
            [
                'viewParameters' => [
                    'somethingItems' =>$somethingItems
                ],
                'contentTemplate' => 'MauticTestBundle:Test:test.html.php'
            ]
        );
    }

    public function createSomethingAction(){

        if($this->request->getMethod() == 'POST'){
            $name = $this->request->request->get('name',null);
            $value = $this->request->request->get('value',null);
            $id = $this->request->request->get('id',null);

            if( !empty($name) && !empty($value) ){
                $model = $this->getModel('mautictest.something');
                $something  = (isset($id))?$model->getEntity($id):$model->getEntity();
                if(!isset($something)) return $this->postActionRedirect(['returnUrl'=> $this->generateUrl('plugin_list_something')]);

                $something->setName($name);
                $something->setValue($value);
                $model->saveEntity($something);
            }
        }

        return $this->postActionRedirect(['returnUrl'=> $this->generateUrl('plugin_list_something')]);

    }

    public function deleteSomethingAction($somethingId){
        $model = $this->getModel('mautictest.something');
        $something  = $model->getEntity($somethingId);
        if(isset($something)){
            $model->deleteEntity($something);
        }
        return $this->postActionRedirect(['returnUrl'=> $this->generateUrl('plugin_list_something')]);
    }
}
