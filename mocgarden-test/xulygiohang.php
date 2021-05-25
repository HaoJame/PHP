<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	require_once "cart_module.php";
	
	if(isset($_POST['action'])){
		switch($_POST['action']){
			case "Mua hàng":
				$hang = array ("id"=>$_POST['id_sanpham'],"ten"=>$_POST['ten_sanpham'], "gia"=>$_POST['gia_sanpham'], "soluong"=>1);
				themhangvaogio($hang);
				header("Location: ".$_SERVER['HTTP_REFERER']);
				break;
			case "+": 
				capnhathangtrongio($_POST['id_sanpham'], $_POST['soluong']);
				header ("Location:".$_SERVER['HTTP_REFERER']);
				break;
			case "-": 
				capnhathangtrongio($_POST['id_sanpham'], $_POST['soluong']);
				header ("Location:".$_SERVER['HTTP_REFERER']);
				break;
			case "Xoá hàng":
				xoahangkhoigio($_POST['id_sanpham']);
				header("Location:".$_SERVER['HTTP_REFERER']);
				break;
			default:
				break;
		}
	}
	?>
	
</body>
</html>