<?php
include '../model/Cart_Model.php';
	Class cart_Controller
	{
		function cartAction()
		{
			$cart_Model= new Cart_Model();
			$cart_Model->get_Cart();
		}
	}
?>