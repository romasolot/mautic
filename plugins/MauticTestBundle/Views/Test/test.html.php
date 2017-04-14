<?php
$view->extend('MauticTestBundle:Test:index.html.php');
?>
<div class="container-fluid">
    <h3 class="text-center">Something List</h3>
    <div class="row">
        <?php echo $view->render('MauticTestBundle:Test:something_list_form.html.php'); ?>
    </div>

    <hr />
    <div class="row something-list-block">
        <?php foreach ($somethingItems as $item): ?>
            <?php echo $view->render('MauticTestBundle:Test:something_list_item.html.php', ['item'=>$item]); ?>
        <?php endforeach;?>
    </div>
</div>
<script>
    (function($){
        $(document).ready(function(){
            $('.something-item .delete-something-btn').on('click',function(e){
                e.preventDefault();
                var btn = $(this);
                var item = btn.closest('.something-item');
                $.post(btn.attr('href'));
                item.remove();
                return false;
            });
            $('.something-item input').on('input',function(){
                var item = $(this).closest('.something-item');
                item.find('.save-something-btn').removeClass('disabled');
            });
            $('.something-item form').on('submit', function(e){
                e.preventDefault();
                var form = $(this);
                $.post(form.attr('action'), form.serialize());
                form.find('.save-something-btn').addClass('disabled');
                return false;
            })
        });
    })(jQuery);

</script>
