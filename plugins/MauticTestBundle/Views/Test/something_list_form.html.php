<div class="col-xs-12">
    <form class="form-inline" method="POST" action="<?php echo $view['router']->url('plugin_create_something')?>">
        <div class="form-group">
            <label for="nameField">Name</label>
            <input type="text" class="form-control" name="name" id="nameField" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="valueField">Value</label>
            <input type="text" class="form-control" name="value" id="valueField" placeholder="Value">
        </div>
        <button type="submit" class="btn btn-default">Create Something</button>
    </form>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>