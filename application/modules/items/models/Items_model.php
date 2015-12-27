<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items_model extends MY_Model {

	public $table  = 'items';
	public $column = array(
					'id',
					'supp_code',
					'sku',
					'item_name',
					'price',
					'sold_price'
				);
}
