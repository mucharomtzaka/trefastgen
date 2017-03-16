<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Welcome extends CI_Controller {
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
	function __construct(){
		parent::__construct();
		$this->checkplugin->checkdatabase();
		  $this->checkplugin->index('Welcome');
	}
	public function index()
	{
		$this->data['title'] = 'Welcome to Trefasgen';
		$this->data['message']  =$this->session->flashdata('message');
		
		$this->template->render('welcome_message',$this->data);
	}

}
