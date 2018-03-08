<?php
include "DB.PHP";
$DB=new DB();
$DB->connect_DB();

$output='';
$keyword = $_GET["search"];
$query ="SELECT TenSP,ID FROM chitietsp WHERE TenSP LIKE '%".$keyword."%'";
$data=$DB->get_All_Row($query);
foreach( $data as $item) {
      $output .='
            <li class="nav-item">
                <a href="/MVCFP/site/view/detail.php?id='.$item['ID'].'">'.$item['TenSP'].'</a>
            </li>
            ';
}
    echo $output;
?>


