<?php
if(isset($_POST["txtthem"])){
	$errors=array();
	if(empty($_POST["txtname"])){
		$errors[]="vui lòng nhập tên";
	}
	if(empty($_POST["txtnumberSp"])){
		$errors[]="vui lòng nhập loại sản phẩm";
	}
	if(empty($_POST["txtprice"])){
		$errors[]="vui lòng nhập giá";
	}

	if(empty($errors)){

		$data =array(
			"idsp" => $_POST["txtnumberSp"],
			"name" => $_POST["txtname"],
			"price" => $_POST["txtprice"],
			"rate" =>$_POST["txtnumber"],
			"intro" =>$_POST["txtintro"],
			"picture" => "public/image/product/".$_FILES["txtimage"]["name"],
			"created_at"=> time()
		);
		$check=$conn->prepare("SELECT * FROM chitietsp WHERE TenSP = :name");
		$check->bindParam(":name",$data["TenSP"],PDO::PARAM_STR);
		$check->execute();
		$count=$check->rowCount();
		if($count == 0){

			$smmt=$conn->prepare("INSERT INTO `chitietsp`(`IDSP`,`TenSP`, `Gia`,`Noibat`, `Mota`, `Hinh`, `created_at`) VALUES (:idsp,:name, :price,:rate, :intro, :picture, :created_at)");
			$smmt->bindParam(":idsp",$data["idsp"],PDO::PARAM_STR);
			$smmt->bindParam(":name",$data["name"],PDO::PARAM_STR);
			$smmt->bindParam(":price",$data["price"],PDO::PARAM_INT);
			$smmt->bindParam(":rate",$data["rate"],PDO::PARAM_INT);
			$smmt->bindParam(":intro",$data["intro"],PDO::PARAM_STR);
			$smmt->bindParam(":picture",$data["picture"],PDO::PARAM_STR);
			$smmt->bindParam(":created_at",$data["created_at"],PDO::PARAM_INT);
			$smmt->execute();
			move_uploaded_file($_FILES["txtimage"]["tmp_name"],"../public/image/product/".$_FILES["txtimage"]["name"]);
			header("location:index.php");
			exit();
		}
		else{
			$errors[]="Tên này đã tồn tại. Vui lòng nhập lại!";
		}
	}

}


?>

<h1 class="func">Thêm thông tin sản phẩm</h1>

<form action="" method="POST" enctype="multipart/form-data">
	<?php
	if(!empty($errors)){
		foreach ($errors as $value) {
			?>
			<div class="error">

				<?php echo $value;?>

			</div>
			<?php
		}
	}
	?>
	<table>
		<tr>
			<td>Name product:</td>
			<td><input type="text" name="txtname" 
				value= "<?php if(isset($_POST["txtname"])){
					echo $_POST['txtname'];}?>" class="form-control"></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type="text" name="txtprice" value= "<?php if(isset($_POST["txtprice"])){
						echo $_POST['txtname'];}?>"  class="form-control"></td>
					</tr>
					<tr>
						<td>Loại Sp:</td>
						<td><input type="number" name="txtnumberSp" required="" min=1 max=2 length=1 value= "<?php if(isset($_POST["txtnumberSp"])){
							echo $_POST['txtnumberSp'];}?>"  class="form-control"></td>
						</tr>
						<tr>
							<td>Nổi bật:</td>
							<td><input type="number" name="txtnumber" required="" min=0 max=2 value= "<?php if(isset($_POST["txtnumber"])){
								echo $_POST['txtnumber'];}?>"  class="form-control"></td>
							</tr>
							<tr>
								
								<td>Choose image:</td>
								<td>
									<input type="file" name="txtimage" class="form-control" onchange="viewAvatar(this)">
									<div ><img class="show-img" src="" alt="" style="height: 100px; width: 100px;"></div>
								</td>

								</tr>
								<tr>
									<td>Description:</td>
									<td><textarea class="form-control" name="txtintro" cols="30" rows="10"><?php if(isset($_POST["txtintro"])){
										echo $_POST['txtname'];}?></textarea></td>
									</tr>
									<tr>
										<td colspan="2" align="center">
											<button type="submit" name="txtthem" class="btn btn-primary btn-lg">Thêm</button>

										</td>
									</tr>

								</table>


							</form>