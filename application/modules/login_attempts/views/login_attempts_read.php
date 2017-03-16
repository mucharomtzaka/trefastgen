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
        <h2 style="margin-top:0px">Login_attempts Read</h2>
        <table class="table">
	    <tr><td>Ip Address</td><td><?php echo $ip_address; ?></td></tr>
	    <tr><td>Login</td><td><?php echo $login; ?></td></tr>
	    <tr><td>Time</td><td><?php echo $time; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('login_attempts') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
       </div>
   </div>
        </section>
</div>