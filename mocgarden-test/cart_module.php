<?php
			
	function themhangvaogio($hang){
		if(isset($_SESSION['giohang'])){
			$giohang = $_SESSION['giohang'];
			if(!array_key_exists($hang["id"], $giohang))	//nếu hàng chưa có trong giỏ mới cho thêm
			$giohang[$hang["id"]] = $hang;  	//key của mảng sẽ được lấy theo id của sản phẩm
			else 
			{
				$giohang[$hang["id"]]["soluong"]+=1;
			}
			$_SESSION['giohang'] = $giohang;
		}else{
			$giohang[$hang["id"]] = $hang;
			$_SESSION['giohang'] = $giohang;
		}
	}
	function xoahangkhoigio($key){
		if(isset($_SESSION['giohang'])){
			$giohang = $_SESSION['giohang'];
			unset($giohang[$key]);
			$_SESSION['giohang'] = $giohang;
		}
	}
	function capnhathangtrongio($key, $soluong){
		if(isset($_SESSION['giohang'])){
			$giohang = $_SESSION['giohang'];
			$giohang[$key]['soluong'] = $soluong;
			$_SESSION['giohang'] = $giohang;
		}
	}
	function tinhtien(){
		$sum = 0;
		$giohang = $_SESSION['giohang'];
		foreach($giohang as $v)
			$sum+=$v['soluong']*$v['gia'];
		return number_format($sum);
	}
?>