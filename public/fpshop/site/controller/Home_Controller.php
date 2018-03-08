<?php
include 'site/model/Home_Model.php';
	Class Home_Controller
	{
		function homeNAction()
		{
			$home_Model= new Home_Model();
			$home_Controller=$home_Model->getNewProduct();
			return $home_Controller;
		}
		function homeBAction()
		{
			$home_Model= new Home_Model();
			$home_Controller=$home_Model->getBestProduct();
			return $home_Controller;
		}
		function homeDAction()
		{
			$home_Model= new Home_Model();
			$home_Controller=$home_Model->getDiscount();
			return $home_Controller;
		}

	}
?>