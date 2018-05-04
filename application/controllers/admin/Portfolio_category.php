<?php
		    class Portfolio_category extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Portfolio_category_model');
	        $this->module = 'portfolio_category';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Portfolio_category';
			if ( $this->permission['view_all'] == '1'){$this->data['portfolio_category'] = $this->Portfolio_category_model->all_rows('portfolio_category');}
			elseif ($this->permission['view'] == '1') {$this->data['portfolio_category'] = $this->Portfolio_category_modelget_rows('portfolio_category',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/portfolio_category/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Portfolio_category';$this->load->template('admin/portfolio_category/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$config['upload_path']          = './uploads/';
					                $config['allowed_types']        = 'png|jpg|jpeg|gif';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('Image'))
					                {
					                        $data['Image'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Portfolio_category_model->insert('portfolio_category',$data);
			if ($id) {
				redirect('admin/portfolio_category');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Portfolio_category';
			$this->data['portfolio_category'] = $this->Portfolio_category_model->get_row_single('portfolio_category',array('id'=>$id));$this->load->template('admin/portfolio_category/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$config['upload_path']          = './uploads/';
					                $config['allowed_types']        = 'png|jpg|jpeg|gif';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('Image'))
					                {
					                        $data['Image'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Portfolio_category_model->update('portfolio_category',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/portfolio_category');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Portfolio_category_model->delete('portfolio_category',array('id'=>$id));
			redirect('admin/portfolio_category');
		}}