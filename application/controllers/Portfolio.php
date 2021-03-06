<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('portfolio_model');
    }

    public function index()
    {
    	$this->data['portfolio'] = $this->home_model->get_portfolio();
    	$this->load->front_template('home',$this->data);
    }

    public function detail($id)
    {
        $this->data['portfolio'] = $this->portfolio_model->get_row_single('portfolio', array('id' => $id));
        $this->load->front_template('portfolio/template'.$this->data['portfolio']['template'].'.php',$this->data);      
    }

}