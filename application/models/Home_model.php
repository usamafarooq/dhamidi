<?php 

class Home_model extends MY_Model
{
	public function get_portfolio($id = null)
	{
		$this->db->select('portfolio.*,portfolio_category.Name as category')
				 ->from('portfolio')
				 ->join('portfolio_category', 'portfolio_category.id = portfolio.Category')
				 ->limit(10)
				 ->order_by('portfolio.id', 'desc'); 
		return $this->db->get()->result_array();
	}
}