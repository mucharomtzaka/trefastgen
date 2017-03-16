<?php  defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Checkplugin{
	 protected $CI;
	 public $table = 'plugin_module';
     public $modules ='name_modules';
        public function __construct(){
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
        }

	     public function get_by_modules($modules){
			$this->CI->db->where($this->modules, $modules);
	        return $this->CI->db->get($this->table)->row();
		}

		public function index($modules){
			$ws = $this->get_by_modules($modules);
			if($ws->status_modules == 0){
				$this->CI->session->set_flashdata('notice','Modules '.$modules.'is Disabled!');
				redirect('home/redirect_alt','refresh');
			}

		}

		public function checkdatabase(){
				require APPPATH.'config/database.php';
				$checkdatabase = $db['default']['database'];
				if($checkdatabase ==''){
					$cek = 'Please Check Connection database! ';
					$this->CI->session->set_flashdata('notice',$cek);
					redirect('errors','refresh');
				}
		}
}