<?php
class Portfolio extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portfolio_model');
        $this->module     = 'portfolio';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }
    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('admin/home');
        }
        $this->data['title'] = 'Portfolio';
        if ($this->permission['view_all'] == '1') {
            $this->data['portfolio'] = $this->Portfolio_model->get_portfolio();
        } elseif ($this->permission['view'] == '1') {
            $this->data['portfolio'] = $this->Portfolio_model->get_portfolio($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('admin/portfolio/index', $this->data);
    }
    public function create()
    {
        if ($this->permission['created'] == '0') {
            redirect('admin/home');
        }
        $this->data['title']                    = 'Create Portfolio';
        $this->data['table_portfolio_category'] = $this->Portfolio_model->all_rows('portfolio_category');
        $this->load->template('admin/portfolio/create', $this->data);
    }
    public function insert()
    {
        if ($this->permission['created'] == '0') {
            redirect('admin/home');
        }
        $data                    = $this->input->post();
        $data['user_id']         = $this->session->userdata('user_id');
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size']      = 5000;
        $config['max_width']     = 5024;
        $config['max_height']    = 4768;
        
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('Image')) {
            $data['Image'] = '/uploads/' . $this->upload->data('file_name');
        }
        $id = $this->Portfolio_model->insert('portfolio', $data);
        if ($id) {
        	if (!empty($data['template'])) {
        		redirect('admin/portfolio/template/'.$id.'/'.$data['template']);
        	}
            redirect('admin/portfolio');
        }
    }
    public function edit($id)
    {
        if ($this->permission['edit'] == '0') {
            redirect('admin/home');
        }
        $this->data['title']                    = 'Edit Portfolio';
        $this->data['portfolio']                = $this->Portfolio_model->get_row_single('portfolio', array(
            'id' => $id
        ));
        $this->data['table_portfolio_category'] = $this->Portfolio_model->all_rows('portfolio_category');
        $this->load->template('admin/portfolio/edit', $this->data);
    }
    
    public function update()
    {
        if ($this->permission['edit'] == '0') {
            redirect('admin/home');
        }
        $data = $this->input->post();
        $id   = $data['id'];
        unset($data['id']);
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size']      = 5000;
        $config['max_width']     = 5024;
        $config['max_height']    = 4768;
        
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('Image')) {
            $data['Image'] = '/uploads/' . $this->upload->data('file_name');
        }
        $id = $this->Portfolio_model->update('portfolio', $data, array(
            'id' => $id
        ));
        if ($id) {
            redirect('admin/portfolio');
        }
    }
    public function delete($id)
    {
        if ($this->permission['deleted'] == '0') {
            redirect('admin/home');
        }
        $this->Portfolio_model->delete('portfolio', array(
            'id' => $id
        ));
        redirect('admin/portfolio');
    }

    public function template($id,$template)
    {
    	if ($this->input->post()) {
    		$data = $this->input->post();
    		$this->Portfolio_model->update('portfolio', $data, array('id' => $id));
    		redirect('admin/portfolio');
    	}
    	$this->load->view('admin/portfolio/template'.$template);
    }

    public function drag_image()
    {
    	$config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size']      = 5000;
        $config['max_width']     = 5024;
        $config['max_height']    = 4768;
        
        $this->load->library('upload', $config);
        $data = array();
        if ($this->upload->do_upload('file')) {
            $data['Image'] = '/uploads/' . $this->upload->data('file_name');
        }
        echo json_encode($data);
    }
}