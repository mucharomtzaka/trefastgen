
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
        <h2 style="margin-top:0px">Test <?php echo $button ?></h2>
     <?php echo form_open($action,'class="form-horizontal"');?>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Blog Title </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="Blog Title" value="<?php echo $blog_title; ?>" />
            </div>
            <?php echo form_error('blog_title') ?>
        </div>
	    <div class="form-group">
            <label for="blog_description" class="col-md-4 control-label">Blog Description</label>
            <div class="col-md-4">
            <textarea class="form-control textarea" rows="3" name="blog_description" id="blog_description" placeholder="Blog Description"><?php echo $blog_description; ?></textarea>
            </div>
            <?php echo form_error('blog_description') ?>
        </div>
	    <input type="hidden" name="blog_id" value="<?php echo $blog_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('test') ?>" class="btn btn-default"><i class="fa fa-cancel"></i>Cancel</a>
	<?php echo form_close();?>
 </div>
   </div>
        </section>
</div>