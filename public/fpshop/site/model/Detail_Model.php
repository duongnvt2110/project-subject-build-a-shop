<?php
include '../config/DB.php';
	Class Detail_Model extends DB
	{
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