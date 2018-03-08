<?php
	if(isset($_GET["id"])){
		$id=(int)$_GET["id"];
		
		if($id<=0){
			header("location:index.php");
			exit();
		}else{
			$data_edit1=$conn->prepare("SELECT * FROM chitietsp WHERE ID=:id");
		$data_edit1->bindParam(":id",$id,PDO::PARAM_INT);
		$data_edit1->execute();
		$data_pic=$data_edit1->fetch(PDO::FETCH_ASSOC);
			if(file_exists('../'.$data_pic["Hinh"])){
				unlink('../'.$data_pic["Hinh"]);
			}
			$smmt=$conn->prepare("DELETE FROM chitietsp WHERE ID=:id");
			$smmt->bindParam(":id",$id,PDO::PARAM_INT);
			$smmt->execute();
			
			header("location:index.php");
			exit();
		}
	}
	
?>