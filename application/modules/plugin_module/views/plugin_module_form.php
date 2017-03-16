<!-- 
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
        <h2 style="margin-top:0px">Plugin_module <?php echo $button ?></h2>
     <?php echo form_open($action,'class="form-horizontal"');?>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Name Modules </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="name_modules" id="name_modules" placeholder="Name Modules" value="<?php echo $name_modules; ?>" />
            </div>
            <?php echo form_error('name_modules') ?>
        </div>
	    <div class="form-group">
            <label for="int" class="col-md-4 control-label">Status Modules </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="status_modules" id="status_modules" placeholder="Status Modules" value="<?php echo $status_modules; ?>" />
            </div>
            <?php echo form_error('status_modules') ?>
        </div>
	    <div class="form-group">
            <label for="int" class="col-md-4 control-label">Plug Id Dynamic Menu </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="plug_id_dynamic_menu" id="plug_id_dynamic_menu" placeholder="Plug Id Dynamic Menu" value="<?php echo $plug_id_dynamic_menu; ?>" />
            </div>
            <?php echo form_error('plug_id_dynamic_menu') ?>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('plugin_module') ?>" class="btn btn-default"><i class="fa fa-cancel"></i>Cancel</a>
	<?php echo form_close();?>
 </div>
   </div>
        </section>
</div> -->