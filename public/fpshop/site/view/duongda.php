<?php

include '../controller/Duongda_Controller.php';
include '../controller/Cart_Controller.php';
$duongda=new Duongda_Controller();
$duongda_cart=new Cart_Controller();
//$data=$duongda->duongdaAction();
$list=$duongda->duongdalistAction();
$pagination=new Pagination();



$data=$duongda->duongdaAction();
$_config = array(
	        'current_page'  => $data['tranghientai'], // Trang hiện tại
	        'total_record'  => $data['total_record'], // Tổng số record
	        'limit'         => $data['limit'],
	            'link_full'     => 'duongda.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
	        'link_first'    => 'duongda.php'// limit// limit
	    );
$pagination->init($_config);
$data=$data['data'];
$total=$_config['total_record'];
// -------------------------------------

$low=$duongda->priceslow();
$_config = array(
	        'current_page'  => $low['tranghientai'], // Trang hiện tại
	        'total_record'  => $low['total_record'], // Tổng số record
	        'limit'         => $low['limit'],
	            'link_full'     => 'duongda.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
	        'link_first'    => 'duongda.php'// limit// limit
	    );
$pagination->init($_config);
$data_low=$low['data'];
$total=$_config['total_record'];
// -------------------------------------
$high=$duongda->priceshigh();
$_config = array(
	        'current_page'  => $high['tranghientai'], // Trang hiện tại
	        'total_record'  => $high['total_record'], // Tổng số record
	        'limit'         => $high['limit'],
	            'link_full'     => 'duongda.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
	        'link_first'    => 'duongda.php'// limit// limit
	    );

$pagination->init($_config);
$data_high=$high['data'];
$total=$_config['total_record'];
// -------------------------------------
$duongda_cart->cartAction();
?>
<!DOCTYPE html>
<?php include "header.php" ?>


<!-- FOOTER -->
<?php include 'footer.php' ?>