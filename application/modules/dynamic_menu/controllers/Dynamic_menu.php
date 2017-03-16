<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dynamic_menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        $this->checkplugin->checkdatabase();
        $this->checkplugin->index('Dynamic_menu');
        $this->load->model(array('Dynamic_menu/Dynamic_menu_model'));
        $this->load->helper(array('url','language'));
    }

 public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'dynamic_menu/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'dynamic_menu/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'dynamic_menu/index';
            $config['first_url'] = base_url() . 'dynamic_menu/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Dynamic_menu_model->total_rows($q);
        $dynamic_menu = $this->Dynamic_menu_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $this->data = array(
            'dynamic_menu_data' => $dynamic_menu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
         $this->data['message'] = $this->session->flashdata('message');
        $this->template->render('dynamic_menu_list', array_merge($this->data ));
    }

    public function read($id) 
    {
        $row = $this->Dynamic_menu_model->get_by_id($id);
        if ($row) {
            $this->data = array(
		'id' => $row->id,
		'parent_id' => $row->parent_id,
		'title' => $row->title,
		'url' => $row->url,
		'menu_order' => $row->menu_order,
		'status' => $row->status,
		'icon' => $row->icon,
		'description' => $row->description,
	    );
            $this->template->render('dynamic_menu_read',array_merge($this->data ));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dynamic_menu'));
        }
    }

    public function create() 
    {
        $this->data = array(
            'button' => 'Create',
            'action' => site_url('dynamic_menu/create_action'),
	    'id' => set_value('id'),
	    'parent_id' => set_value('parent_id'),
	    'title' => set_value('title'),
	    'url' => set_value('url'),
	    'menu_order' => set_value('menu_order'),
	    'status' => set_value('status'),
	    'icon' => set_value('icon'),
	    'description' => set_value('description'),
	);
        $this->template->render('dynamic_menu_form',array_merge($this->data ));
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'parent_id' => $this->input->post('parent_id',TRUE),
		'title' => $this->input->post('title',TRUE),
		'url' => $this->input->post('url',TRUE),
		'menu_order' => $this->input->post('menu_order',TRUE),
		'status' => $this->input->post('status',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'description' => $this->input->post('description',TRUE),
	    );

            $this->Dynamic_menu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dynamic_menu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Dynamic_menu_model->get_by_id($id);

        if ($row) {
            $this->data = array(
                'button' => 'Update',
                'action' => site_url('dynamic_menu/update_action'),
		'id' => set_value('id', $row->id),
		'parent_id' => set_value('parent_id', $row->parent_id),
		'title' => set_value('title', $row->title),
		'url' => set_value('url', $row->url),
		'menu_order' => set_value('menu_order', $row->menu_order),
		'status' => set_value('status', $row->status),
		'icon' => set_value('icon', $row->icon),
		'description' => set_value('description', $row->description),
	    );
            $this->template->render('dynamic_menu_form',array_merge($this->data ));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dynamic_menu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'parent_id' => $this->input->post('parent_id',TRUE),
		'title' => $this->input->post('title',TRUE),
		'url' => $this->input->post('url',TRUE),
		'menu_order' => $this->input->post('menu_order',TRUE),
		'status' => $this->input->post('status',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'description' => $this->input->post('description',TRUE),
	    );

            $this->Dynamic_menu_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dynamic_menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dynamic_menu_model->get_by_id($id);

        if ($row) {
            $this->Dynamic_menu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dynamic_menu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dynamic_menu'));
        }
    }
    public function _rules() 
    {
	$this->form_validation->set_rules('parent_id', 'parent id', 'trim|required');
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('url', 'url', 'trim|required');
	$this->form_validation->set_rules('menu_order', 'menu order', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('icon', 'icon', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Dynamic_menu.php */
/* Location: ./application/modules/plugin/controllers/Dynamic_menu.php */
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

