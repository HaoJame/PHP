<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		require_once("php/db_module.php");
		if(isset($_GET['email'])&$_GET['email']!=""){
			$link=NULL;
			taoKetNoi($link);
			$result=chayTruyVanKhongTraVeDL($link, "insert into email_marketing(email) values ('".$_GET['email']."')");
			giaiPhongBoNho(NULL,NULL);
			if ($result)
				header("Location: timkiem.php?msg=done");
				
			else 
				header("Location: timkiem.php?msg=error");
		
		}
	 	else
			header("Location: timkiem.php");
	?>
			
</body>
</html>