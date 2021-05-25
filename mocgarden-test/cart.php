

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Giỏ hàng</title>
</head>

<body>
	<?php
		include_once("cart_module.php");
		$giohang=isset($_SESSION['giohang'])?$_SESSION['giohang']:array();
		echo "Có <font color='yellow'>".count($giohang)."</font> sản phẩm <br/>";
		echo "Tổng <font color='yellow'>".(isset($_SESSION['giohang'])?tinhtien():"0")."</font> VND";
		echo "<p><a href='./xemhang.php'>Xem giỏ hàng</a></p>";
	?>
</body>
</html>