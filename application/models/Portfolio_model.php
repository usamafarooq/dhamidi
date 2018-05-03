<?php
		    class Portfolio_model extends MY_Model{

		    	public function get_portfolio($id = null)
					{
						$this->db->select('portfolio.*,portfolio_category.Name as category')
								 ->from('portfolio')->join('portfolio_category', 'portfolio_category.id = portfolio.Category'); if ($id != null) {
								$this->db->where('portfolio.user_id', $id);
							}return $this->db->get()->result_array();
					}}