<?php
session_start();
if(isset($_SESSION["tk_user"])){
	header("location:index.php");
	exit();
}
include 'config.php';
include 'library/connect.php';
include 'library/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link type="text/css" rel="stylesheet" href="template/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="template/css/font-awesome.css">
	<link type="text/css" rel="stylesheet" href="template/css/mycss.css">
	<script type="text/javascript" src="template/js/bootstrap.js"></script>
</head>
<body>
	<?php
	$error=array();
		if(isset($_POST["txtlogin"])){
			
			if(empty($_POST["txtname"])){
				$error[]= "Vui lòng nhập username";
			}
			if(empty($_POST["txtpass"])){
				$error[]="Vui lòng nhập PassWord";
			}
			$data=array(
				"name"=>$_POST["txtname"],
				"pass"=>md5($_POST["txtpass"])
			);
			$stmt=$conn->prepare("SELECT * FROM user WHERE username =:username AND password =:password");
			$stmt->bindParam(":username",$data["name"],PDO::PARAM_STR);
			$stmt->bindParam(":password",$data["pass"],PDO::PARAM_STR);
			$stmt->execute();
			$countsql=$stmt->rowCount();
			if($countsql<=0){
				$error[]="Tài khoản không tổn tại!";
			}else{
				$data_user=$stmt->fetch(PDO::FETCH_ASSOC);
				$_SESSION["tk_user"]= $data_user["username"];
				$_SESSION["tk_level"]=$data_user["level"];
				header("location:index.php");
				exit();
			}

		}
	?>	
	<fieldset>
		<legend> Login</legend>
	<?php 
			foreach ($error as $value) {
				?>
	<div class="ERROR" >
		
				<?php echo $value;?>
		
	</div>
		<?php }
		?>
<form method="POST" action="" id="form-login">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="txtname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="txtpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <!-- <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div> -->
  <button type="submit" name="txtlogin" class="btn btn-primary">Đăng nhập</button>
</form>
</fieldset>



	<!-- <fieldset>
		<legend>Login</legend>
		<?php 
			foreach ($error as $value) {
				?>
	<div class="ERROR" >
		
				<?php echo $value;?>
		
	</div>
		<?php }
		?>
	<form method="POST" action="">
		<table class="login">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="txtname" ></td>
			</tr>
			<tr>
				<td>PassWord:</td>
				<td><input type="password" name="txtpass"></td>
			</tr>
			<tr><td><input type="submit" name="txtlogin" value="login"></td></tr>
		</table>
	</form>

	</fieldset> -->
</body>
</html>