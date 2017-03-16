
   <div class="content-wrapper">
   <section class="content">
    <div class="box">
 <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         <div class="box-body">
        <h2 style="margin-top:0px">Dynamic_menu <?php echo $button ?></h2>
     <?php echo form_open($action,'class="form-horizontal"');?>
	    <div class="form-group">
            <label for="tinyint" class="col-md-4 control-label">Parent Id </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="parent_id" id="parent_id" placeholder="Parent Id" value="<?php echo $parent_id; ?>" />
            </div>
            <?php echo form_error('parent_id') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Title </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $title; ?>" />
            </div>
            <?php echo form_error('title') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Url </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?php echo $url; ?>" />
            </div>
            <?php echo form_error('url') ?>
        </div>
	    <div class="form-group">
            <label for="tinyint" class="col-md-4 control-label">Menu Order </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="menu_order" id="menu_order" placeholder="Menu Order" value="<?php echo $menu_order; ?>" />
            </div>
            <?php echo form_error('menu_order') ?>
        </div>
	    <div class="form-group">
            <label for="tinyint" class="col-md-4 control-label">Status </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
            </div>
            <?php echo form_error('status') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Icon </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="<?php echo $icon; ?>" />
            </div>
            <?php echo form_error('icon') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Description </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?php echo $description; ?>" />
            </div>
            <?php echo form_error('description') ?>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('dynamic_menu') ?>" class="btn btn-default"><i class="fa fa-cancel"></i>Cancel</a>
	<?php echo form_close();?>
 </div>
   </div>
        </section>
</div>