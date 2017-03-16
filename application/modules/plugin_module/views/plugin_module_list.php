
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
        <h2 style="margin-top:0px">Plugin_module List</h2>
        <div class="row" style="margin-bottom: 10px">
           <!--  <div class="col-md-4">
                <?php echo anchor(site_url('plugin_module/create'),'Create', 'class="btn btn-primary"><i class="fa fa-plus"></i'); ?>
            </div> -->
            <div class="col-md-9 text-center">
                <div style="margin-top: 8px" id="message">
                 <?php  if($message){?>
                <div class="alert alert-info alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $message;?>
                    </div>
                      <?php }?>
                </div>
            </div>
            <div class="col-md-3 pull-right">
                <form action="<?php echo site_url('plugin_module/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('plugin_module'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
		<th>Name Modules</th>
		<th>Status Modules</th>
		<th>Action</th>
            </tr><?php
            foreach ($plugin_module_data as $plugin_module)
            {
                ?>
                <tr>
        			<td><?php echo ++$start ?></td>
        			<td>
              <a href="<?php echo base_url($plugin_module->name_modules); ?>">
                <?php echo $plugin_module->name_modules; ?>
              </a></td>
	             <?php if($plugin_module->status_modules =='1'){ ?>
                <td>Enable Register</td>
                <?php }else{?>
                <td> Disable Register</td>
                <?php } ?>
			<td>
				<!-- <?php 
				echo anchor(site_url('plugin_module/read/'.$plugin_module->id),'Read',' class="btn btn-default"><i class="fa fa-eye"></i'); 
				echo ' | '; 
				echo anchor(site_url('plugin_module/update/'.$plugin_module->id),'Update','class="btn btn-warning"><i class="fa fa-edit"></i'); 
				?> -->
        <?php if($plugin_module->status_modules =='1'){ ?>
          <a href="<?php echo base_url('plugin_module/disable_plugin/');?><?php echo $plugin_module->id;?>" class="btn btn-success"><i class="fa fa-edit"></i>Enable</a></td>
        <?php }else{?>
         <a href="<?php echo base_url('plugin_module/enable_plugin/');?><?php echo $plugin_module->id;?>" class="btn btn-info"><i class="fa fa-edit"></i>Disable</a></td>
        <?php } ?>
			</td>

		</tr>
                <?php
            }
            ?>
        </table>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
   </div>
   </div>
        </section>
</div> 