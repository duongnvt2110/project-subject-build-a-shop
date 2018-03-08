<?php
include '../model/Duongda_Model.php';
include '../config/paging.php';
	Class Duongda_Controller
	{
		function duongdaAction()
		{
			$tranghientai=isset($_GET['page']) ? $_GET['page'] : 1;
			$duongda=new Duongda_Model();
			$total_record=$duongda->numRows();
			$limit=6;
			$sotrang=($tranghientai-1)*$limit;
			$data=$duongda->getProduct($sotrang,$limit);
			return array('data' => $data,'tranghientai'=>$tranghientai,'limit'=>$limit,'total_record'=>$total_record);
		}
		function duongdalistAction()
		{
			$duongda=new Duongda_Model();
			$total_list=$duongda->listProduct();
			return $total_list;
		}
		function priceslow()
		{

			$tranghientai=isset($_GET['page']) ? $_GET['page'] : 1;
			$duongda=new Duongda_Model();
			$total_record=$duongda->numRows();
			$limit=6;
			$sotrang=($tranghientai-1)*$limit;
			$data=$duongda->priceslow($sotrang,$limit);
			return array('data' => $data,'tranghientai'=>$tranghientai,'limit'=>$limit,'total_record'=>$total_record);
		}
		function priceshigh()
		{
			$tranghientai=isset($_GET['page']) ? $_GET['page'] : 1;
			$duongda=new Duongda_Model();
			$total_record=$duongda->numRows();
			$limit=6;
			$sotrang=($tranghientai-1)*$limit;
			$data=$duongda->priceshigh($sotrang,$limit);
			return array('data' => $data,'tranghientai'=>$tranghientai,'limit'=>$limit,'total_record'=>$total_record);
		}
	}
?>