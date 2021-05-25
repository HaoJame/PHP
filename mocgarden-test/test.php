<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kết quả tìm kiếm</title>
	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/timkiem.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
		include_once "php/config.php";
		include_once "php/db_module.php";
		include_once "cart_module.php";
		include_once "cart.php";
	?>
	<div class="container-fluid">
		<!--HEADER-->
		<div class="row">
			
			<!--Tên cửa hàng-->
		  <div class="col-4 bg-white">
				<font color="#0d3f05">
					<center><h3><b>MỘC GARDEN</b><br></h3></center>
				<center class="name"><h4><small><b>CỦA HÀNG CÂY CẢNH MINI</b></small></h4></center>
				</font>
		  </div> <!--Tên cửa hàng-->
			
			<!--Tìm kiếm và giỏ hàng-->
			<div class="col-8 bg-white">
				<!--Hộp tìm kiếm - giỏ hàng-->
				<div class="box-tk-gh">
					
					<!--Hộp giỏ hàng-->
					<div class="container-cart">
						<ul>
						<li class="dropdown">
								<a href="giohang.html" class="drop" data-toggle="dropdown"><button class="cart"><i class="fa fa-shopping-cart"></i></button></a>
								<span class="inf"><font size="3" style="background-color: aqua">Tổng cộng:
									<?php 
										$giohang=isset($_SESSION['giohang'])?$_SESSION['giohang']:array();
										echo (isset($_SESSION['giohang'])?tinhtien():"0")
									?>đ</font></span>
								 <ul class="dropdown-menu cart-list"> 
								  <li style="margin-left: auto;margin-right: auto; width: 95%"> 
									  <a href="#" class="photo" style="width: 25%; float:left">
										  <img src="pic/sanpham/cau-tieu-tram.jpg" class="cart-thumb" alt="Sản phẩm 1" style="width: 100%">
									  </a> 
									  <span class="pro-info" style="width: 50%; margin-left: 15px; display: inline-block; margin-bottom: 10px">
										  <a href="#" class="pro-name">Cau tiểu trâm</a> <br>
										  <span class="price">80.000</span>
										  <br>
										  <div class="btn_tanggiam">
											  <input class="minus is-form" type="button" value="-">
											  <input aria-label="quantity" class="input-qty" max="1000" min="1" name="" type="number" value="1">
											  <input class="plus is-form" type="button" value="+">
										</div>
									  </span>
									  <a href="#"><i class="fas fa-times"></i></a>
								  </li>
									 
								  <li style="margin-left: auto;margin-right: auto; width: 95%"> 
									  <a href="#" class="photo" style="width: 25%; float:left">
										  <img src="pic/sanpham/chau-thuy-tinh.jpg" class="cart-thumb" alt="Sản phẩm 2" style="width: 100%">
									  </a> 
									  <span class="pro-info" style="width: 60%; margin-left: 15px; display: inline-block; margin-bottom: 10px">
										  <a href="#" class="pro-name">Chậu thuỷ tinh</a> <br>
										  <span class="price">40.000</span>
										  <br>
										  <div class="btn_tanggiam">
											  <input class="minus is-form" type="button" value="-">
											  <input aria-label="quantity" class="input-qty" max="1000" min="1" name="" type="number" value="1">
											  <input class="plus is-form" type="button" value="+">
										</div>
									  </span>
									   <a href="#"><i class="fas fa-times"></i></a>
								  </li> 
								<li style="margin-left: 0px;">
									<center><a href="giohang.html"><button class="btn-giohang"><b>ĐI TỚI GIỎ HÀNG</b></button></a></center>
								</li>
								</ul> 
							</li>
						</ul>
					</div> 
					
					<!--Hộp tìm kiếm-->
					<div class="container-tk">
						<input type="search" id="search" placeholder="Tìm kiếm sản phẩm..." />
						<a href="timkiem.html"><button class="search"><i class="fa fa-search"></i></button></a>
  					</div>
				</div> <!--Hộp tìm kiếm - giỏ hàng-->
			</div> <!--Tìm kiếm và giỏ hàng-->
		</div> <!--HEADER-->
		
		<!--MENU-->
		<div class="row">
		  <nav class="navbar navbar-expand-lg" style="background-color: #88DF89; width: 100%;"> 
			  <a class="navbar-brand" href="index.html">
				  <button class="fb"><i class="fab fa-pagelines" style="color: green"></i></button>
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> 
				  <span class="navbar-toggler-icon"></span> 
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
				<!--Các menu-->
			    <ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">TRANG CHỦ</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">GIỚI THIỆU</a>
					</li>
					<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="sp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						SẢN PHẨM
					</a>
						<div class="dropdown-menu" aria-labelledby="sp">
							<?php
								$link = NULL;
								taoKetNoi($link);
								$result = chayTruyVanTraVeDL($link, "select * from tbl_danhmuc");
								while($rows=mysqli_fetch_assoc($result))
								{
							?> 
									<a class="dropdown-item" href='./?group=".$rows['id_danhmuc']."&from=1'><?php echo $rows['ten_danhmuc']?></a>
							<?php
								}//--kết thúc while
							?>
						</div>
					</li>
					<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="blog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						BLOG
					</a>
						<div class="dropdown-menu" aria-labelledby="blog">
							<a class="dropdown-item" href="#">Chăm sóc cây cây</a>
							<a class="dropdown-item" href="#">Câu hỏi thường gặp</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">ĐÁNH GIÁ</a>
					</li>
				</ul> <!--Các menu-->
		    </div>
		  </nav>
        </div><!--MENU-->
		
		<!--BANNER-->
		<div class="row">
			<div class="banner" style="position: relative; height: 200px">
				<div class="text-banner" style="color:black; position: absolute;"><h2><b>KẾT QUẢ TÌM KIẾM</b></h2></div>	
					<img src="pic/banner/timkiem-banner.jpg" width="100%" height="100%">
			</div>
        </div> <!--BANNER-->
		
		<!--CONTENT-->
		<div class="row" style="background-color:#EFEEEE;">
			<!--leftbar-->
			<div class="col-12 col-md-8">
				<!--nền kqtk-->
				<div class="back-kqtk">
					<p style="margin-left: 20px; padding-top: 20px;width: 80%"><font color="#0d3f05">Có 6 kết quả tìm kiếm</font></p>
					
					<!--kqtk + phân trang-->
					<div class="kqtk">
						<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" style="margin-left: 20px; background-color:#C5F6C6">
							Độ liên quan
					</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Thứ tự theo mức độ phổ biến</a>
							<a class="dropdown-item" href="#">Thứ tự theo điểm đánh giá</a>
							<a class="dropdown-item" href="#">Thứ tự theo giá: thấp tới cao</a>
							<a class="dropdown-item" href="#">Thứ tự theo giá: cao tới thấp</a>
						</div>
					    <?php
						$result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where id_sanpham=1");
						$rows = mysqli_fetch_assoc($result);
						?>
						<!--Danh sách sp-->
						<div class="product_list">
							
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
							
							<br style="clear: both">
						</div> <!--Danh sách sp--> 

						<!--phân trang--> 
						<nav aria-label="Page navigation">
						  <ul class="pagination justify-content-center">
							<li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span> </a> </li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span> </a> </li>
						  </ul>
					  	</nav> <!--phân trang--> 
						
					</div><!--kqtk + phân trang--> 
					<br>
				</div> <!--nền kqtk-->
				
			</div> <!--leftbar--> 
			<!--Rightbar-->
			<div class="col-12 col-md-4">
				
				<!--Rightbar-content-->
				<div class="position-sticky">
				
					<!--Danh mục sp-->
					<div class="dmuc bg-white">
						<div class="danh-muc">
							<h5><b><font color="0d3f05">DANH MỤC SẢN PHẨM</font></b></h5>
							<a href="#"><font size="+1" color="0d3f05">Cây</font></a>
							<hr  width="100%" />
							<a href="#"><font size="+1" color="0d3f05">Chậu</font></a>
							<hr  width="100%" />
							<a href="#"><font size="+1" color="0d3f05">Đất và phân bón</font></a>
							<hr  width="100%" />
							<a href="#"><font size="+1" color="0d3f05">Dụng cụ chăm sóc</font></a>
							<hr  width="100%" />
						</div>
					</div><!--Danh mục sp-->
			  </div><!--Rightbar-content-->
			</div> <!--Rightbar-->
		</div>
		
		<!--FOOTER-->
		<div class="row">
			<!--left-footer-->
			<div class="col-12 col-md-6 bg-dark">
				
				<!--Thông tin Mộc-->
				<div class="info">
				<br>
				<h5><font color="#F8F8F8"><b>MỘC GARDEN</b></font></h5><br>
				<i class="fas fa-map-pin" style="color:#D0BFC0">&ensp;&ensp;Đường Bắc Hải, phường 12, quận 10</i><br>
				<i class="fas fa-phone" style="color:#D0BFC0">&ensp;0939.90.6789</i><br>
				<i class="fas fa-at" style="color:#D0BFC0">&ensp;mocgarden@gmail.com</i><br>
				<i class="fas fa-clock" style="color:#D0BFC0">&ensp;8:00 - 22:00 </i>
				<br>
				<br>
				</div> <!--Thông tin Mộc-->
				
				<!--Social Media-->
				<div class="info">
					<button class="fb"><i class="fab fa-facebook-f" style="color: white"></i></button>
					<button class="twt"><i class="fab fa-twitter" style="color: white"></i></button>
					<button class="ins"><i class="fab fa-instagram" style="color: white"></i></button>
				</div><!--Social Media-->
				<br>
			</div> <!--left-footer-->
			
			<!--Right-footer-->
			<div class="col-12 col-md-6 bg-dark">
				<div class="info">
					<br>
					<h5><font color="#F8F8F8"><b>CHÍNH SÁCH</b></font></h5><br>
					<i class="fas fa-truck" style="color:#D0BFC0"></i>&ensp;<a class="ship" href="#"><b><font color="#D0BFC0">Chính sách vận chuyển</font></b></a><br><br>
					<i class="fas fa-undo-alt" style="color:#D0BFC0">&ensp;</i><a class="return" href="#"><b><font color="#D0BFC0"> Chính sách đổi trả</font></b></a> 
				</div>
				<br>
				<div class="dk-email">
					<h6><font color="#F8F8F8"><b><i>Đăng ký nhận khuyến mãi </i></b></font></h6>
					<input type="email" value="" placeholder="  Nhập email của bạn..." name="email" id="mail" aria-label="general-newsletter_form-newsletter_email">
					<button class="btn_dki" name="subscribe" id="subscribe"><b>Đăng ký</b></button>
				</div>
				<br>
			</div>
		</div> <!--FOOTER-->
	</div> <!-- Container-->
	<!------BUTTON tăng giảm số lượng ------>
		<script>//<![CDATA[
		$('input.input-qty').each(function() {
		  var $this = $(this),
			qty = $this.parent().find('.is-form'),
			min = Number($this.attr('min')),
			max = Number($this.attr('max'))
		  if (min == 0) {
			var d = 0
		  } else d = min
		  $(qty).on('click', function() {
			if ($(this).hasClass('minus')) {
			  if (d > min) d += -1
			} else if ($(this).hasClass('plus')) {
			  var x = Number($this.val()) + 1
			  if (x <= max) d += 1
			}
			$this.attr('value', d).val(d)
		  })
		})
		//]]></script>
</body>
</html>