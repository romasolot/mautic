<div class="col-sm-6 col-md-4 col-lg-3 something-item">
    <div class="thumbnail">
        <div class="caption">
            <h3>Something item</h3>
            <form class="form" method="POST" action="<?php echo $view['router']->url('plugin_create_something')?>">
                <input type="hidden" name="id" class="something_id" value="<?php echo $item->getId() ?>">
                <div class="form-group">
                    <label for="nameField">Name</label>
                    <input type="text" class="form-control" name="name" id="nameField" placeholder="Name" value="<?php echo $item->getName() ?>">
                </div>
                <div class="form-group">
                    <label for="valueField">Value</label>
                    <input type="text" class="form-control" name="value" id="valueField" placeholder="Value" value="<?php echo $item->getValue() ?>">
                </div>
                <p>
                    <a href="<?php echo $view['router']->url('plugin_delete_something', ['somethingId'=>$item->getId()])?>" class="btn btn-danger delete-something-btn" role="button">Delete</a>
                    <button type="submit" class="btn btn-primary save-something-btn disabled" role="button">Save</button>
                </p>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
</div>