<?php
include '../model/Trangdiem_Model.php';
include '../config/paging.php';
	Class Trangdiem_Controller
	{
		function trangdiemAction()
		{
			$tranghientai=isset($_GET['page']) ? $_GET['page'] : 1;
			$trangdiem=new Trangdiem_Model();
			$total_record=$trangdiem->numRows();
			$limit=6;
			$sotrang=($tranghientai-1)*$limit;
			$data=$trangdiem->getProduct($sotrang,$limit);
			return array('data' => $data,'tranghientai'=>$tranghientai,'limit'=>$limit,'total_record'=>$total_record);
		}
		function trangdiemlistAction()
		{
			$trangdiem=new Trangdiem_Model();
			$total_list=$trangdiem->listProduct();
			return $total_list;
		}
		function priceslow()
		{

			$tranghientai=isset($_GET['page']) ? $_GET['page'] : 1;
			$trangdiem=new Trangdiem_Model();
			$total_record=$trangdiem->numRows();
			$limit=6;
			$sotrang=($tranghientai-1)*$limit;
			$data=$trangdiem->priceslow($sotrang,$limit);
			return array('data' => $data,'tranghientai'=>$tranghientai,'limit'=>$limit,'total_record'=>$total_record);
		}
		function priceshigh()
		{
			$tranghientai=isset($_GET['page']) ? $_GET['page'] : 1;
			$trangdiem=new Trangdiem_Model();
			$total_record=$trangdiem->numRows();
			$limit=6;
			$sotrang=($tranghientai-1)*$limit;
			$data=$trangdiem->priceshigh($sotrang,$limit);
			return array('data' => $data,'tranghientai'=>$tranghientai,'limit'=>$limit,'total_record'=>$total_record);
		}
	}
?>