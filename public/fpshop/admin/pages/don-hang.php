<?php
include 'library/Pagination.php';
$smmt=$conn->prepare("SELECT * FROM donhang as `dh` INNER JOIN chitietdonhang as `ctdh` ON `dh`.`IDDH`=`ctdh`.`IDDH`");
$smmt->execute();
$count=$smmt->fetchAll(PDO::FETCH_ASSOC);
$config = array(
    'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
    'total_record'  => count($count), // Tổng số record
    'limit'         => 5, // limit
    'link_full'     => 'index.php?t=don-hang&page={page}',// Link full có dạng như sau: domain/com/page/{page}
    'link_first'    => 'index.php?t=don-hang' // Link trang đầu tiên
);
$paging = new Pagination();
 
$paging->init($config);
$offset=0;
if(isset($_GET['page'])){
	$offset=($_GET["page"]-1)*5;
	$query="SELECT * FROM donhang as `dh` INNER JOIN chitietdonhang as `ctdh` ON `dh`.`IDDH`=`ctdh`.`IDDH` LIMIT ".$offset.",5";

}else{
	$query="SELECT * FROM donhang as `dh` INNER JOIN chitietdonhang as `ctdh` ON `dh`.`IDDH`=`ctdh`.`IDDH` LIMIT 0,5";
}
$smmt=$conn->prepare($query);
$smmt->execute();
$data=$smmt->fetchAll(PDO::FETCH_ASSOC);
if(empty($data)){
	header("location:index.php");
	exit();
}

?>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
    	<th class="head-sp" scope="col">STT</th>
		<th class="head-sp" scope="col">Tên KH</th>
		<th class="head-sp" scope="col">Địa chỉ</th>
		<th class="head-sp" scope="col">Tên SP</th>		
		<th class="head-sp" scope="col">Số lượng</th>
		<th class="head-sp" scope="col">Tổng tiền</th>
		<th class="head-sp" scope="col">SĐT</th>
		<th class="head-sp" scope="col">Ngày Đặt</th>		
      <!-- <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th> -->
    </tr>
  </thead>
  <tbody>
    <h1 class="func">Danh sách các đơn hàng</h1>
    <?php foreach ($data as $value) {

			?>
			<tr>

				<th scope="row"><?php echo $offset++;?></th>
				<td ><?php echo $value["Ten"];?></td>
				<td ><?php echo $value["Diachi"];?></td>				
				<td ><?php echo $value["TenSP"];?></td>
				<td ><?php echo $value["SL"];?></td>
				<td ><?php echo $value["Tongtien"];?></td>
				<td ><?php echo $value["SDT"];?></td>
				<td ><?php echo $value["NGAY"];?></td>			
				
			</tr>
			<?php
		}
		?>
    
  </tbody>
</table>
<?php echo $paging->html(); ?>
<style>
    .item-page{float:left; margin: 3px; }
    .item-link{padding: 5px;}
    .item-span{display:inline-block; padding: 0px 3px; background: #1ccacd; color:white;
    margin: 0 5px;
    border-radius: 50%;
    width: 27px;
    height: 27px;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
     }
    ul.container-item {
    display: block;
    margin-left: 35%;
}
</style>

