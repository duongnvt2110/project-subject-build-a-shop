<?php
include '../config/DB.php';
	Class Duongda_Model extends DB
	{
		public function getProduct($sotrang,$sorow)
		{
			$db=new DB();
			$db->connect_DB();
			$query="SELECT * FROM chitietsp c INNER JOIN loaisp p ON c.IDSP=p.IDLoaiSp WHERE c.IDSP=1 Limit $sotrang,$sorow";
			$data=$db->get_All_Row($query);
			return $data;
		}
		public function numRows()
		{
			$db=new DB();
			$db->connect_DB();
			$query="SELECT c.IDSP FROM chitietsp c INNER JOIN loaisp p ON c.IDSP=p.IDLoaiSp WHERE c.IDSP=1";
			$data=$db->count_rows($query);
			return $data;
		}
		public function listProduct()
		{
			$db=new DB();
			$db->connect_DB();
			$query="SELECT * FROM chitietsp c INNER JOIN loaisp p ON c.IDSP=p.IDLoaiSp WHERE c.IDSP=1 limit 1,3";
			$data=$db->get_All_Row($query);
			return $data;
		}
		public function priceslow($sotrang,$sorow)
		{
			$db=new DB();
			$db->connect_DB();
			$query="SELECT * FROM chitietsp c INNER JOIN loaisp p ON c.IDSP=p.IDLoaiSp WHERE c.IDSP=1 ORDER BY Gia ASC Limit $sotrang,$sorow";
			$data=$db->get_All_Row($query);
			return $data;
		}
		public function priceshigh($sotrang,$sorow)
		{
			$db=new DB();
			$db->connect_DB();
			$query="SELECT * FROM chitietsp c INNER JOIN loaisp p ON c.IDSP=p.IDLoaiSp WHERE c.IDSP=1 ORDER BY Gia DESC Limit $sotrang,$sorow";
			$data=$db->get_All_Row($query);
			return $data;
		}
	}
?>