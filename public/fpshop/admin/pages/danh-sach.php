<?php
include 'library/Pagination.php';
$queryAll="SELECT * FROM chitietsp";
$smmt=$conn->prepare($queryAll);
$smmt->execute();
$count=$smmt->fetchAll(PDO::FETCH_ASSOC);
$config = array(
    'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
    'total_record'  => count($count), // Tổng số record
    'limit'         => 5, // limit
    'link_full'     => 'index.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
    'link_first'    => 'index.php' // Link trang đầu tiên
);
$paging = new Pagination();
 
$paging->init($config);
$offset=0;
if(isset($_GET['page'])){
	$offset=($_GET["page"]-1)*5;
	$query="SELECT * FROM chitietsp LIMIT ".$offset.",5";

}else{
	$query="SELECT * FROM chitietsp LIMIT 0,5";
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
		<th class="head-sp" scope="col">Tên SP</th>
		<th class="head-sp" scope="col">Giá</th>
		<th class="head-sp" scope="col">Nổi bật</th>
		<th class="head-sp" scope="col">Loại SP</th>
		<th class="head-sp" scope="col">Hình</th>
		<th class="head-sp" colspan="2">Option</th>
      
    </tr>
  </thead>
  <tbody>
    <h1 class="func">Danh sách các sản phẩm</h1>
    <?php foreach ($data as $value) {

			?>
			<tr>

				<th scope="row"><?php echo $offset++;?></th>
				<td ><?php echo $value["TenSP"];?></td>
				<td ><?php echo $value["Gia"];?></td>
				<td ><?php echo $value["Noibat"];?></td>
				<td ><?php 
					if($value["IDSP"]==1){
						echo "Dưỡng Da";
					}
					else if($value["IDSP"]==2){
						echo "Trang điểm";
					} 
					?>
					
				</td>
				<td ><img src="<?php echo '../'.$value["Hinh"];?>" style="width:100px;"></td>
				<td ><a href="index.php?t=sua&id=<?php echo $value["ID"];?>" ><button type="button" class="btn btn-info">Edit</button></a></td>
				<td ><a href="index.php?t=xoa&id=<?php echo $value["ID"];?> " onclick="return acceptRemove()"><button type="button" class="btn btn-danger">Delete</button></a></td>

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

