<?php defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Errors extends CI_Controller {
/*
Trefast Development
Trefast Development merupakan Start up Bussiness di bidang 
jasa pengembangan produk teknologi informasi  web development
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
 function __construct()
    {
        parent::__construct(); 
        
    }

  function index(){
  	$userdata = $this->session->userdata('notice');
  	$this->data['notice'] = isset($userdata) ? $userdata : 'NOT FOUND PAGE';
  	$this->template->render('error',$this->data);
  }


}