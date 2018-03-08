<?php

if(!isset($_GET["id"])){
	header("location:index.php");
	exit();
}else {
	$id=(int)$_GET["id"];


	if($id <= 0){
		header("location:index.php");
		exit();
	}else{

		if(isset($_POST["txtsua"])){
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
					"name" => $_POST["txtname"],
					"price" => $_POST["txtprice"],
					"intro" =>$_POST["txtintro"],
					"rate" =>$_POST["txtnumber"],
					"picture" => $_FILES["txtimage"]["name"],	
					"created_at"=> time()
				);
				$check=$conn->prepare("SELECT * FROM chitietsp WHERE TenSP = :name");
				$check->bindParam(":name",$data["name"],PDO::PARAM_STR);
				$check->execute();
				$count=$check->rowCount();
				if($count == 0){

					$smmt=$conn->prepare("UPDATE `chitietsp` SET TenSP= :name, Gia= :price, Mota= :intro,Noibat= :rate,created_at = :created_at, Hinh= :picture WHERE ID = :id");
					$smmt->bindParam(":id",$id,PDO::PARAM_INT);
					$smmt->bindParam(":name",$data["name"],PDO::PARAM_STR);
					$smmt->bindParam(":price",$data["price"],PDO::PARAM_INT);
					$smmt->bindParam(":intro",$data["intro"],PDO::PARAM_STR);
					$smmt->bindParam(":rate",$data["rate"],PDO::PARAM_STR);
					$smmt->bindParam(":picture",$data["picture"],PDO::PARAM_STR);
					$smmt->bindParam(":created_at",$data["created_at"],PDO::PARAM_INT);
					$smmt->execute();
					move_uploaded_file($_FILES["txtimage"]["tmp_name"],"upload/".$_FILES["txtimage"]["name"]);
					header("location:index.php");
					exit();
				}
				else{
					$errors[]="tên này đã tồn tại. Vui lòng nhập lại!";
				}
			}
		}
		$data_edit=$conn->prepare("SELECT * FROM chitietsp WHERE ID= :id");
		$data_edit->bindParam(":id",$id,PDO::PARAM_INT);
		$data_edit->execute();
		$data_fetch=$data_edit->fetch(PDO::FETCH_ASSOC);
	}




	?>

<h1 class="func">Sửa thông tin sản phẩm</h1>

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
				<td><input type="text" name="txtname" class="form-control"
					value= "<?php if(isset($_POST['txtname'])){
						echo $_POST['txtname'];
					}else{
						echo $data_fetch['TenSP'];

					}?>"></td>

				</tr>
				<tr>
					<td>Price:</td>
					<td><input type="text" class="form-control" min=5 max=15 name="txtprice" value= "<?php if(isset($_POST["txtprice"])){
						echo $_POST['txtprice'];}
						else{
							echo $data_fetch['Gia'];
						}

						?>"></td>
					</tr>
					<tr>
						<td>Loại Sp:</td>
						<td><input type="number" class="form-control" min=1 max=2 name="txtnumberSp" value= "<?php if(isset($_POST["txtnumberSp"])){
							echo $_POST['txtnumberSp'];}
							else{
								echo $data_fetch['IDSP'];
							}

							?>"></td>
						</tr>
						<tr>
							<td>Nổi bật:</td>
							<td><input type="number" class="form-control" min=0 max=2 name="txtnumber" value= "<?php if(isset($_POST["txtnumber"])){
								echo $_POST['txtnumber'];}
								else{
									echo $data_fetch['Noibat'];
								}

								?>"></td>
							</tr>
							<tr>
								<td>Choose image:</td>
								<td>
									<input type="file" class="form-control " name="txtimage" onchange="viewAvatar(this)">
									
									<div ><img class="show-img" src="<?php echo '../'.$data_fetch['Hinh']; ?>" alt="" style="height: 100px; width: 100px;"></div>	
											
								</td>
							</tr>
							<tr>
								<td>Description:</td>
								<td><textarea name="txtintro" class="form-control" cols="30" rows="10"><?php if(isset($_POST["txtintro"])){
									echo $_POST['txtintro'];
								}else {
									echo $data_fetch["Mota"];
								}


								?></textarea></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><button type="submit" name="txtsua" class="btn btn-primary btn-lg">Save</button></td>
							</tr>

						</table>


					</form>
					<?php
				}
				?>