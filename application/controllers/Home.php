<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
    {
    	$this->data['portfolio'] = $this->home_model->get_portfolio();
    	$this->load->front_template('home',$this->data);
    }

}