<?php 
include 'site/config/DB.php';
	Class Home_Model extends DB
	{
		
		public function getNewProduct()
		{
				$db=new DB();
			$db->connect_DB();
			$query='SELECT * FROM chitietsp';
			$data=$db->get_All_Row($query);
			return $data;
		} 
			public function getBestProduct()
		{
			$db=new DB();
			$db->connect_DB();
			$query='SELECT * FROM chitietsp WHERE Noibat=0';
			$data=$db->get_All_Row($query);
			return $data;
		} 
			public function getDiscount()
		{
			$db=new DB();
			$db->connect_DB();
			$query='SELECT * FROM khuyenmai';
			$data=$db->get_All_Row($query);
			return $data;
		} 
		public function getDetail($id)
		{
			$db=new DB();
			$db->connect_DB();
			$query="SELECT * FROM chitietsp WHERE ID=$id";
			$data=$db->get_All_Row($query);
			return $data;
		}
	}

?>