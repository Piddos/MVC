<?php
	namespace models;
	/**
	* 
	*/
	class Product_Model extends Base_Model
	{
		public $category_id;
		public $product_name;
		public $price;
		public $details;
		public $activate;
		public $time_created;
		public $time_updated;

		function __construct($category_id=NULL, $product_name=NULL, $price=NULL, $details=NULL, $activate=NULL){
			parent::__construct();
			$this->category_id = $category_id;
			$this->product_name= $product_name;
			$this->price = $price;
			$this->details = $details;
			$this->activate = $activate;
		}
		public function insert_product(){
			$sql ="INSERT INTO 
				products(
					category_id,
					product_name,
					price,
					details,
					activate,
					time_created,
					time_updated
					) 
				VALUES(
					'{$this->category_id}',
					'{$this->product_name}',
					'{$this->price}',
					'{$this->details}',
					'{$this->activate}',
					'5555-11-11',
					'5555-11-11'
					)";
			$this->conn->query($sql);
			return 1;
		}
	
	}



?>