<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
Trefast Development
Trefast Development merupakan Start up Bussiness di bidang 
jasa pengembangan produk teknologi informasi yang terdiri dari web development
*/
/*
@author: Mucharom
@Email :mucharomtzaka@yahoo.co.id / mucharomtzaka@gmail.com
@Alamat: Jl.Pagersari-Patean , Kendal 51354 Jawa Tengah
@HP/Whatapps:+6289692412261
@https://github.com/mucharomtzaka
@fanspage : https://www.facebook.com/trefast.teknik.indonesia 
homepage coming soon 
*/
?>
<div class="wrapper">
<div class="content-wrapper">
    <section class="content-header">
      <div class="row">
           <?php  if($message){?>
             
                 <div class="alert alert-info alert-dismissible">
                  <fieldset>
                   <legend> Information<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></legend>
                          <?php echo $message;?>
                   </fieldset>
                </div>
             
                 <?php }?>
      </div>
    </section>
    <!-- Main content -->
    <section class="content-body">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $title;?> Version <?php echo $versi;?></h3>
          <p>Trefastgen merupakan <i>Libraries</i> PHP <i>opensource</i> yang digunakan untuk membuat CRUD sederhana. aplikasi ini dikembangkan dengan menggunakan Admin LTE bootstrap dan Codeigniter Versi 3* serta mendukung model HMVC.</p>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <div class="row">
            <div class="col-md-4">
               <p><?php echo $$title;?></p>
                <fieldset>
                <legend>Database</legend>
                  <div class="table-responsive">
                  <?php echo  form_open_multipart('home/restore','class="form-horizontal"')?>
                  <div class="form-group">
                    <label class="col-md-3 control-label">File Sql</label>
                    <div class="col-md-5">
                      <input type="file" name="sql" class="form-control file" required="required">
                    </div>
                     <input type="submit" value="restore" name="restore" class="btn btn-primary" onclick="javascript: return confirm('Are you sure to restore Database. Continue ?')" />
                          <?php echo form_close();?> 
                  </div>
                  <?php echo form_close();?>
                </div>
                <ul>
                    <li> <?php echo anchor(base_url('home/backup'),'Link backup');?></li>
                </ul>
                 </fieldset>
            </div>
            <div class="col-md-3 " id="generator">
                <h1> Form CRUD Generator</h1>
                <div class="box-border">
                      <?php echo form_open('home/creator_module');?>
                      <div class="form-group">
                              <label>Select Table - <a href="<?php echo $_SERVER['PHP_SELF'] ?>"><i class="glyphicon glyphicon-refresh"></i>Refresh</a></label>
                              <select id="table_name" name="table_name" class="form-control select2" onchange="setname()">
                                  <option value="">Please Select</option>
                                  <?php
                                  foreach ($table_list as $table) {
                                      ?>
                                     <option value="<?php echo $table['table_name'];?>"><?php echo $table['table_name'];?></option>
                                      <?php
                                  }
                                  ?>
                              </select>
                          </div>
                           <div class="form-group">
                              <label><i>Custom Controller Name</i></label>
                              <input type="text" id="controller" name="controller" value="" class="form-control" placeholder="Controller Name" />
                          </div>
                          <div class="form-group">
                              <label><i>Custom Model Name</i></label>
                              <input type="text" id="model" name="model" value="" class="form-control" placeholder="Controller Name" />
                          </div>
                          <div class="form-group">
                              <label><i>Target Location Folder</i></label>
                              <select name="location" class="select2 form-control">
                               <option value="modules">Modules</option>
                               <option value="export_modules">Export_modules</option>
                             </select>
                          </div>
                          <i class="glyphicon glyphicon-plus"> </i>
                     <input type="submit" value="Generate" name="generate" class="btn btn-primary" onclick="javascript: return confirm('This will overwrite the existing files. Continue ?')" />
                          <?php echo form_close();?>  
                      </div>    
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
                              - class Modgen yang  berada di ./application/libraries  <br>
                              - Extension HMVC  dan core loader  <br>
                              - class Template  <br>
                              - dev_helper 
                              </li>
                            <li>Untuk menggunakan Migration !.  Anda dapat membuat file migration dengan lokasi ./application/migration/ nama_file_anda </li>
                            <li> Jika Table data telah dibuat ....... selanjutnya Gunakan Fitur  Form Builder CRUD generator dibawah ini.!  </li>
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
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
     <section class="content">
      <!-- Default box -->
      <div class="box">
       <div class="row">
          <div class="col-md-12" id="listfolder">
            <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="glyphicon glyphicon-folder-open"></i>List Folder Modules</a></li>
              <li ><a href="#tab_2" data-toggle="tab"><i class="glyphicon glyphicon-folder-open"></i>List Folder Template</a></li>
              <li ><a href="#tab_3" data-toggle="tab"><i class="glyphicon glyphicon-folder-open"></i>List Folder Migration Database</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                   <div class="table-responsive col-md-6">
                    <table class="table table-bordered table-hover" id="table1">
                      <caption><i>List Folder Modules</i></caption>
                      <thead>
                        <tr>
                          <th><i>Name Modules Link</i></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      foreach($directory_modules as $key=>$list):?>
                        <tr>
                         <td><?php echo anchor($key,substr($key),'<i class="glyphicon glyphicon-folder-open"><i');?></td> 
                        </tr>
                      <?php 
                      endforeach;?>
                      </tbody>
                    </table>
                    </div>
              </div>
              <div class="tab-pane" id="tab_2">
                 <ul class="timeline">
                 
                  <?php foreach($directory_template as $key=>$list):?>
                         <li><i class="fa fa-file"> </i> 
                          <div class="timeline-item">
                           <a href="#"><?php echo $list;?></a>
                         </div>
                         </li>
                  <?php endforeach;?>
                 </ul>
              </div>
               <div class="tab-pane" id="tab_3">
                 <ul class="timeline">
              
                  <?php foreach($directory_migration as $key=>$list):?>
                         <li><i class="fa fa-file"> </i> 
                          <div class="timeline-item">
                         <a href="#"><?php echo $list;?></a>
                         </div>
                         </li>
                  <?php endforeach;?>
                 </ul>
              </div>
              </div>
            </div>
            </div>
          </div>
       </div>

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
            function capitalize(s) {
                return s && s[0].toUpperCase() + s.slice(1);
            }

            function setname() {
                var table_named = document.getElementById('table_name').value.toLowerCase();
                if (table_named != '') {
                    document.getElementById('controller').value = capitalize(table_named);
                    document.getElementById('model').value = capitalize(table_named) + '_model';
                } else {
                    document.getElementById('controller').value = '';
                    document.getElementById('model').value = '';
                }
            }
</script>
</div>
