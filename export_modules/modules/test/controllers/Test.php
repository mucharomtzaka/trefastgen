<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->checkplugin->checkdatabase(); 
        $this->checkplugin->index('Test');
        $this->load->model(array('Test/Test_model'));
        $this->load->helper(array('url','language'));
    }

 public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'test/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'test/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'test/index';
            $config['first_url'] = base_url() . 'test/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Test_model->total_rows($q);
        $test = $this->Test_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $this->data = array(
            'test_data' => $test,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
         $this->data['message'] = $this->session->flashdata('message');
        $this->template->render('test_list', array_merge($this->data ));
    }

    public function read($id) 
    {
        $row = $this->Test_model->get_by_id($id);
        if ($row) {
            $this->data = array(
		'blog_id' => $row->blog_id,
		'blog_title' => $row->blog_title,
		'blog_description' => $row->blog_description,
	    );
            $this->template->render('test_read',array_merge($this->data ));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }

    public function create() 
    {
        $this->data = array(
            'button' => 'Create',
            'action' => site_url('test/create_action'),
	    'blog_id' => set_value('blog_id'),
	    'blog_title' => set_value('blog_title'),
	    'blog_description' => set_value('blog_description'),
	);
        $this->template->render('test_form',array_merge($this->data ));
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'blog_title' => $this->input->post('blog_title',TRUE),
		'blog_description' => $this->input->post('blog_description',TRUE),
	    );

            $this->Test_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('test'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Test_model->get_by_id($id);

        if ($row) {
            $this->data = array(
                'button' => 'Update',
                'action' => site_url('test/update_action'),
		'blog_id' => set_value('blog_id', $row->blog_id),
		'blog_title' => set_value('blog_title', $row->blog_title),
		'blog_description' => set_value('blog_description', $row->blog_description),
	    );
            $this->template->render('test_form',array_merge($this->data ));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('blog_id', TRUE));
        } else {
            $data = array(
		'blog_title' => $this->input->post('blog_title',TRUE),
		'blog_description' => $this->input->post('blog_description',TRUE),
	    );

            $this->Test_model->update($this->input->post('blog_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('test'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Test_model->get_by_id($id);

        if ($row) {
            $this->Test_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('test'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }
    public function _rules() 
    {
	$this->form_validation->set_rules('blog_title', 'blog title', 'trim|required');
	$this->form_validation->set_rules('blog_description', 'blog description', 'trim|required');

	$this->form_validation->set_rules('blog_id', 'blog_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Test.php */
/* Location: ./application/modules/plugin/controllers/Test.php */
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

