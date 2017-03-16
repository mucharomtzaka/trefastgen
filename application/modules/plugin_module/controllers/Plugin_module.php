<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin_module extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        $this->checkplugin->checkdatabase();
        $this->load->model(array('Plugin_module/Plugin_module_model'));
        $this->load->helper(array('url','language'));
    }

 public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'plugin_module/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'plugin_module/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'plugin_module/index';
            $config['first_url'] = base_url() . 'plugin_module/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Plugin_module_model->total_rows($q);
        $plugin_module = $this->Plugin_module_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $this->data = array(
            'plugin_module_data' => $plugin_module,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
         $this->data['message'] = $this->session->flashdata('message');
        $this->template->render('plugin_module_list', array_merge($this->data ));
    }

   /* public function read($id) 
    {
        $row = $this->Plugin_module_model->get_by_id($id);
        if ($row) {
            $this->data = array(
		'id' => $row->id,
		'name_modules' => $row->name_modules,
		'status_modules' => $row->status_modules,
		'plug_id_dynamic_menu' => $row->plug_id_dynamic_menu,
	    );
            $this->template->render('plugin_module_read',array_merge($this->data ));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('plugin_module'));
        }
    }

    public function create() 
    {
        $this->data = array(
            'button' => 'Create',
            'action' => site_url('plugin_module/create_action'),
	    'id' => set_value('id'),
	    'name_modules' => set_value('name_modules'),
	    'status_modules' => set_value('status_modules'),
	    'plug_id_dynamic_menu' => set_value('plug_id_dynamic_menu'),
	);
        $this->template->render('plugin_module_form',array_merge($this->data ));
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name_modules' => $this->input->post('name_modules',TRUE),
		'status_modules' => $this->input->post('status_modules',TRUE),
		'plug_id_dynamic_menu' => $this->input->post('plug_id_dynamic_menu',TRUE),
	    );

            $this->Plugin_module_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('plugin_module'));
        }
    }
    */
  /*  public function update($id) 
    {
        $row = $this->Plugin_module_model->get_by_id($id);

        if ($row) {
            $this->data = array(
                'button' => 'Update',
                'action' => site_url('plugin_module/update_action'),
		'id' => set_value('id', $row->id),
		'name_modules' => set_value('name_modules', $row->name_modules),
		'status_modules' => set_value('status_modules', $row->status_modules),
		'plug_id_dynamic_menu' => set_value('plug_id_dynamic_menu', $row->plug_id_dynamic_menu),
	    );
            $this->template->render('plugin_module_form',array_merge($this->data ));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('plugin_module'));
        }
    }*/
    
    /*public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'name_modules' => $this->input->post('name_modules',TRUE),
		'status_modules' => $this->input->post('status_modules',TRUE),
		'plug_id_dynamic_menu' => $this->input->post('plug_id_dynamic_menu',TRUE),
	    );

            $this->Plugin_module_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('plugin_module'));
        }
    }*/
    
   /* public function delete($id) 
    {
        $row = $this->Plugin_module_model->get_by_id($id);

        if ($row) {
            $this->Plugin_module_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('plugin_module'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('plugin_module'));
        }
    }*/
   /* public function _rules() 
    {
	$this->form_validation->set_rules('name_modules', 'name modules', 'trim|required');
	$this->form_validation->set_rules('status_modules', 'status modules', 'trim|required|numeric');
	$this->form_validation->set_rules('plug_id_dynamic_menu', 'plug id dynamic menu', 'trim|required|numeric');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }*/

     public function enable_plugin($id){
         $this->Plugin_module_model->update($id,array('status_modules'=>1));
        $this->session->set_flashdata('message','Plugin modules is enabled');
        redirect('plugin_module','refresh');
    }

   public function disable_plugin($id){
        $this->Plugin_module_model->update($id,array('status_modules'=>0));
        $this->session->set_flashdata('message','Plugin modules is disabled');
        redirect('plugin_module','refresh');
   }

}

/* End of file Plugin_module.php */
/* Location: ./application/modules/plugin/controllers/Plugin_module.php */
/* Please DO NOT modify this information : */
/*
Trefast Development
Trefast Development merupakan Start up Bussiness di bidang 
jasa pengembangan produk teknologi informasi  web development
Email :mucharomtzaka@yahoo.co.id / mucharomtzaka@gmail.com
Alamat: Jl.Pagersari-Patean , Kendal 51354 Jawa Tengah
HP/Whatapps:+6289692412261
https://github.com/mucharomtzaka
*/

