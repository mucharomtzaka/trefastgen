<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_attempts extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        $this->checkplugin->index('Login_attempts');
        $this->load->model(array('Login_attempts/Login_attempts_model'));
        $this->load->helper(array('url','language'));
    }

 public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'login_attempts/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'login_attempts/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'login_attempts/index';
            $config['first_url'] = base_url() . 'login_attempts/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Login_attempts_model->total_rows($q);
        $login_attempts = $this->Login_attempts_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $this->data = array(
            'login_attempts_data' => $login_attempts,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
         $this->data['message'] = $this->session->flashdata('message');
        $this->template->render('login_attempts_list', array_merge($this->data ));
    }

    public function read($id) 
    {
        $row = $this->Login_attempts_model->get_by_id($id);
        if ($row) {
            $this->data = array(
		'id' => $row->id,
		'ip_address' => $row->ip_address,
		'login' => $row->login,
		'time' => $row->time,
	    );
            $this->template->render('login_attempts_read',array_merge($this->data ));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('login_attempts'));
        }
    }

    public function create() 
    {
        $this->data = array(
            'button' => 'Create',
            'action' => site_url('login_attempts/create_action'),
	    'id' => set_value('id'),
	    'ip_address' => set_value('ip_address'),
	    'login' => set_value('login'),
	    'time' => set_value('time'),
	);
        $this->template->render('login_attempts_form',array_merge($this->data ));
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'ip_address' => $this->input->post('ip_address',TRUE),
		'login' => $this->input->post('login',TRUE),
		'time' => $this->input->post('time',TRUE),
	    );

            $this->Login_attempts_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('login_attempts'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Login_attempts_model->get_by_id($id);

        if ($row) {
            $this->data = array(
                'button' => 'Update',
                'action' => site_url('login_attempts/update_action'),
		'id' => set_value('id', $row->id),
		'ip_address' => set_value('ip_address', $row->ip_address),
		'login' => set_value('login', $row->login),
		'time' => set_value('time', $row->time),
	    );
            $this->template->render('login_attempts_form',array_merge($this->data ));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('login_attempts'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'ip_address' => $this->input->post('ip_address',TRUE),
		'login' => $this->input->post('login',TRUE),
		'time' => $this->input->post('time',TRUE),
	    );

            $this->Login_attempts_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('login_attempts'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Login_attempts_model->get_by_id($id);

        if ($row) {
            $this->Login_attempts_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('login_attempts'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('login_attempts'));
        }
    }
    public function _rules() 
    {
	$this->form_validation->set_rules('ip_address', 'ip address', 'trim|required');
	$this->form_validation->set_rules('login', 'login', 'trim|required');
	$this->form_validation->set_rules('time', 'time', 'trim|required|numeric');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Login_attempts.php */
/* Location: ./application/modules/plugin/controllers/Login_attempts.php */
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

