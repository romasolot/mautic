<?php
$view->extend('MauticCoreBundle:Default:content.html.php');

$view['slots']->set('mauticContent', 'something');

$view['slots']->set('headerTitle', 'Something Functional');
?>

<div class="panel panel-default bdr-t-wdh-0 mb-0">
    <div class="page-list">
        <?php $view['slots']->output('_content'); ?>
    </div>
</div>
