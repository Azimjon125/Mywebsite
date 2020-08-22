<!DOCTYPE html>
<html>
<head>
	<title>Zakaz</title>
	<link rel="stylesheet" type="text/css" href="../video/css/bootstrap.css">
</head>
<style type="text/css">
	body
 {
  background-image: linear-gradient(to right,#a0bcb2, #35bbe7);
}

</style>
<body bgcolor="#166130">
<div class="container">
	<div class="row">
		<div class="col-lg-2 offset-5">
			<h1>Zakaz Berish</h1>
		</div>	
</div>

<div class="row">
		<div class="col">
			 <form method="Post" class="form-control">
			 	<input type="text" name="ism" class="form-control" placeholder="Ismingiz...">
			 	<input type="text" name="familiya" class="form-control" placeholder="Familiyangiz...">
			 	<input type="Email" name="miall" class="form-control" placeholder="Eamil...">
			 	<input type="tel" name="tel" class="form-control" placeholder="Raqamingiz...">
			 	<input type="submit"  name="ok" class="form-control btn btn-info" value="OK">
			 </form>
		</div>
	</div>

<?php
if (isset($_POST["ok"])) {
	include '../database/conf.php';
	$ism=addslashes($_POST["ism"]);
	$fam=addslashes($_POST["familiya"]);
	$email=htmlspecialchars($_POST["miall"]);
	$tel=addslashes($_POST["tel"]);

echo $emial;
echo $tel;
//$sql="insert into zakaz value('','{$ism}','{$fam}','{$email}','{$tel}')";
//$baj=mysqli_query($con,$sql) or die(mysql_error());

if ($baj) {
	?>
<script type="text/javascript">
	alert("Arizangiz qabul qilindi Biz sizga telefon orqali xabar yuboramiz");
	window.location.href="../index.php"
</script>
	<?php
}

}

?>

</div>
</body>
</html>