
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
        <h2 style="margin-top:0px">Users <?php echo $button ?></h2>
     <?php echo form_open($action,'class="form-horizontal"');?>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Name </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
            </div>
            <?php echo form_error('name') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Email </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
            </div>
            <?php echo form_error('email') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Password </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
            </div>
            <?php echo form_error('password') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Username </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
            </div>
            <?php echo form_error('username') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Jabatan </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
            </div>
            <?php echo form_error('jabatan') ?>
        </div>
	    <div class="form-group">
            <label for="varchar" class="col-md-4 control-label">Remember Token </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="remember_token" id="remember_token" placeholder="Remember Token" value="<?php echo $remember_token; ?>" />
            </div>
            <?php echo form_error('remember_token') ?>
        </div>
	    <div class="form-group">
            <label for="timestamp" class="col-md-4 control-label">Created At </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
            </div>
            <?php echo form_error('created_at') ?>
        </div>
	    <div class="form-group">
            <label for="timestamp" class="col-md-4 control-label">Updated At </label>
             <div class="col-md-4">
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
            </div>
            <?php echo form_error('updated_at') ?>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('users') ?>" class="btn btn-default"><i class="fa fa-cancel"></i>Cancel</a>
	<?php echo form_close();?>
 </div>
   </div>
        </section>
</div>