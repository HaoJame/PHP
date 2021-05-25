<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
		include_once "php/db_module.php";
		$page=isset($_GET['page'])?$_GET['page']:1;
		$page=is_numeric($page)?$page:1;
		$from =($page-1)*10;
	//Xác định tổng số sp
		if(isset($_GET['keyword']))
		{//echo "từ khoá: ".$_GET['keyword'];
			$result= chayTruyVanTraVeDL($link,"select count(*) from tbl_sanpham where ten_sanpham like '%".$_GET['keyword']."%'");
		 	
		}
		else
			$result= chayTruyVanTraVeDL($link,"select count(*) from tbl_sanpham");
		$row = mysqli_fetch_row($result);
		//echo "count: ".$row[0];
		$total = ceil($row[0]/10);
		//Xác định các sp
		if(isset($_GET['keyword']))
			$result=chayTruyVanTraVeDL($link,"select * from tbl_sanpham where ten_sanpham like '%".$_GET['keyword']."%' limit ".$from.", 10");
		else
			$result=chayTruyVanTraVeDL($link,"select * from tbl_sanpham limit ".$from.", 10");
	
		while($rows=mysqli_fetch_assoc($result))
		{	
			/*$result = chayTruyVanTraVeDL($link, "select * from tbl_hinhanhsanpham where id_sanpham=".$rows['id_sanpham']);
				while($rows_1=mysqli_fetch_assoc($result))
					{
						$hinhanh = $rows_1['hinhanh_sanpham'];
						break;	
					}*/
			?>
			
			<div class="card">
				<img src="pic/sanpham/luoi-ho-1.jpg" style="width: 100%">
				<div class="card-body" style="text-align: center">
					<h5 class="card-title"><a href="#" style="color: green;"><p>
					<?php echo $rows['ten_sanpham']; ?>
					</p></a></h5>
					<p class="card-text"><?php echo $rows['gia_sanpham']; ?>đ</p>
									
					<form method='post' action='xulygiohang.php'>
						<input class="btn btn-success" type='submit' value='Mua hàng' name='action'>
						<input type='hidden' value='<?php echo $rows['id_sanpham']?>' name='id_sanpham'>
						<input type='hidden' value='<?php echo $rows['ten_sanpham']?>' name='ten_sanpham'>
						<input type='hidden' value='<?php echo $rows['gia_sanpham']?>' name='gia_sanpham'>
					</form>
				</div>
			</div>
	<?php
		}
	?>
</body>
</html>