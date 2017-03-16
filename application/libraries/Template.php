<?php
/*
Trefast Development
Trefast Development merupakan Start up Bussiness di bidang 
jasa pengembangan produk teknologi informasi  web development
*/
/*
# Modgen merupakan libraries php yang memanfaatkan  fitur bawaan codeigniter versi 3.*
# Modgen ini support driver Mysql atau Mysqli pada Codeigniter
@author: Mucharom
@Email :mucharomtzaka@yahoo.co.id / mucharomtzaka@gmail.com
@Alamat: Jl.Pagersari-Patean , Kendal 51354 Jawa Tengah
@HP/Whatapps:+6289692412261
@https://github.com/mucharomtzaka
@fanspage : https://www.facebook.com/trefast.teknik.indonesia 
homepage coming soon 
*/
/**
* 
loader template dinamis 
*/
class Template 
{
	
	function __construct()
	{
		# code...
		$this->CI =& get_instance();
	}
	/*
	  Template render dinamis yang akan ditampilkan views browser 
	*/
	public function render($view, $data=null, $returnhtml=false){
		$this->viewdata = (empty($data)) ? $this->data: $data;
		$this->viewdata['titled'] = 'Trefastgen';
		$this->viewdata['credit'] = $this->CI->config->item('credit');
		$this->viewdata['email'] = $this->CI->config->item('Email');
		$this->viewdata['kontak'] = $this->CI->config->item('kontak');
		$this->viewdata['profil'] = $this->CI->config->item('profil');
		$this->viewdata['alamat'] = $this->CI->config->item('alamat');
		$this->viewdata['github'] = $this->CI->config->item('github');
		$this->viewdata['versi']  = $this->CI->config->item('version');
		$view_html = $this->CI->load->view('template/header', $this->viewdata);//header
		$view_html = $this->CI->load->view('template/navbar', $this->viewdata);//navbar
		$view_html = $this->CI->load->view($view, $this->viewdata, $returnhtml); //page dinamis 
		$view_html = $this->CI->load->view('template/asidebar', $this->viewdata);
		$view_html = $this->CI->load->view('template/footer', $this->viewdata);//footer
		if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
	}
}