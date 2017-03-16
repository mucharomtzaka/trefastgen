<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo ucfirst($titled);?></title>
  <!-- Tell the browser to be responsive to screen width -->
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/pace/pace.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/datepicker3.css">
     <link rel="stylesheet" href="<?php echo base_url();?>plugins/datatables/dataTables.bootstrap.css">
</head>
<!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="hold-transition skin-red layout-top-nav">
<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url();?>" class="navbar-brand"><b><i class="fa fa-home"></i>Trefastgen</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
              <li><a href="#panduan"><i class="glyphicon glyphicon-book"></i>Panduan</a></li>
          </ul>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
          <li><a href="#kontak"><i class="fa fa-support"></i>Kontak</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
<div class="wrapper">
<div class="content-wrapper">
  <section class="content-header">
      <div class="row">
           <?php  if($message){?>
             
                 <div class="alert alert-error alert-dismissible">
                  <fieldset>
                   <legend> Information<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></legend>
                          <?php echo $message;?>
                   </fieldset>
                </div>
             
                 <?php }?>
      </div>
    </section>
<section class="content-body">
	<div class="box panel-body">
		<div class="row">
			<div class="col-md-10 text-center">
		               <p>Trefastgen merupakan <i>Libraries</i> PHP <i>opensource</i> yang digunakan untuk membuat CRUD sederhana. aplikasi ini dikembangkan dengan menggunakan Admin LTE bootstrap dan Codeigniter Versi 3* serta mendukung model HMVC.</p>
		  </div>
		</div>
	</div>
</section>
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
		         <div class="row">
		            <div class="col-md-6">
		            	<h3 class="box-title"><?php echo $titled;?></h3>
		            	<fieldset>
		            		<legend>Koneksi Database</legend>
		            	
		            	<?php echo form_open_multipart('install/proses','class="form-horizontal"');?>
		            		<div class="form-group">
		            			<label class="col-md-4 control-label">Hostname*</label>
		            			<div class="col-md-7">
		            				<input type="text" name="hostname" class="form-control" required="required" placeholder="Hostname">
		            			</div>
		            		</div>
		            		<div class="form-group">
		            			<label class="col-md-4 control-label">Username*</label>
		            			<div class="col-md-7">
		            				<input type="text" name="username" class="form-control" required="required" placeholder="username">
		            			</div>
		            		</div>
		            		<div class="form-group">
		            			<label class="col-md-4 control-label">Password*</label>
		            			<div class="col-md-7">
		            				<input type="password" name="password" class="form-control" placeholder="password">
		            			</div>

		            		</div>
		            		<div class="form-group">
		            			<label class="col-md-4 control-label"> Name Database*</label>
		            			<div class="col-md-7">
		            				<input type="text" name="database" class="form-control" required="required" placeholder="name database">
		            			</div>
		            		</div>
                    <div class="form-group">
                      <label class="col-md-4 control-label"> Select Driver*</label>
                      <div class="col-md-7">
                       <select name="driver" class="select2 form-control">
                         <option value="mysqli">Mysqli</option>
                         <option value="mysql">Mysql</option>
                       </select>
                      </div>
                    </div>
		            		<input type="submit" name="connect" value="connect" class="btn btn-primary">
		                <?php echo form_close();?>
		            	</fieldset>
		            </div>
		            <div class="col-md-4">
             		<div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#panduan" data-toggle="tab">Panduan</a></li>
                       <li class="#"><a href="#changelog" data-toggle="tab"><i class="glyphicon glyphicon-list-alt">Changelog</i></a></li>
                       <li class="#"><a href="#examplesql" data-toggle="tab">Contoh SQL</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panduan">
                        <fieldset>
                          <legend><i class="glyphicon glyphicon-book"></i>Panduan Penggunaan</legend>
                          <ol>
                            <li>Pastikan Anda Telah membuat Database Terlebih Dahulu! di phpmyadmin</li>
                            <li>Export File SQL  ke  database phpyadminyang tadi dibuat</li>
                           <li class="#"><a href="#examplesql" data-toggle="tab">Contoh SQL</a></li>
                            <li>Trefast Generator terdiri dari : <br>
                              - class Modgen yang  berada di <?php echo base_url();?>application/libraries  <br>
                              - Extension HMVC  dan core loader  <br>
                              - class Template  <br>
                              - dev_helper 
                              </li>
                            <li>Untuk menggunakan Migration !.  Anda dapat membuat file migration dengan lokasi <?php echo base_url();?>application/migration/ nama_file_anda </li>
                            <li> Jika Table data telah dibuat .... selanjutnya Gunakan Fitur  Form Builder CRUD generator dibawah ini.!  </li>
                          </ol>
                        </fieldset>
                        </div>
                        <div class="tab-pane" id="examplesql">
                        <pre>
#
# TABLE STRUCTURE FOR: dynamic_menu
#

DROP TABLE IF EXISTS `dynamic_menu`;

CREATE TABLE `dynamic_menu` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(100) NOT NULL DEFAULT '',
  `menu_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `level` tinyint(1) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                           
                            </pre>
                        <pre>
DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at_post` date NOT NULL,
  `Penulis` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `posts` (`id`, `title`, `body`, `created_at_post`, `Penulis`) VALUES ('3', 'm', '<p>m<br></p>', '2017-09-18', 'm');


                      </pre>
                        </div>
                        <div class="tab-pane" id="changelog">
                          <p> =========== Trefastgen Versi.1.0=======</p>                         <code>
                            #<i>libraries extension</i> Modgen generator
                        </code>
                        </div>
                    </div>
              </div>
             </div>   
		         </div>
         </div>
        </div>
</section>
</div>
</div>
  <footer class="box footer" id="kontak">
      <p class="footer"> &copy; Copy Right All Reserved 2017.
        <div class="box-footer">
            <div class="row pull-right">
              <div class="col-md-6">
                 <?php echo $credit;?><br>
                 <?php echo $profil;?><br> 
              </div>
              <div class="col-md-6">
                 <i class="fa fa-envelope">Email : </i><?php echo $email;?><br>
                 <i class="fa fa-map-o"> Alamat:</i><?php echo $alamat;?><br>
                 <i class="fa fa-whatsapp"></i><?php echo $kontak;?><br>
                <i class="fa fa-github"></i><?php echo $github;?>
              </div>
            </div>
        </div>
  </footer>
<script src="<?php echo base_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url();?>plugins/jQueryUI/jquery-ui.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>plugins/fastclick/fastclick.js"></script>
<script src="<?php echo base_url();?>plugins/select2/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/app.min.js"></script>
<script src="<?php echo base_url();?>dist/js/etc.js"></script>
<script src="<?php echo base_url();?>plugins/pace/pace.min.js"></script>
</body>
</html>