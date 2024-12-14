<?php 
 include 'config/connect.php';
 session_start();

 class cart {
  public $id, $name, $image, $price, $quantity;
  function __construct($id, $name, $image, $price, $quantity) {
    $this->id = $id;
    $this->name = $name;
    $this->image = $image;
    $this->price = $price;
    $this->quantity = $quantity;

  }
}

 function _header($title) {
    $s = '
     <!DOCTYPE html>
     <html lang="en">
     <head>
    <title>'.$title.'</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="apple-touch-icon" sizes="180x180" href="icon/android-chrome-192x192.png">
     <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
     <link rel="manifest" href="icon/site.webmanifest">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="boottrap/css/bootstrap.min.css">
    <script src="boottrap/js/bootstrap.bundle.js"></script>
    <script src="boottrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
    ';
    echo $s;
 }
 function _footer() {
    $s = '
     <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Về chúng tôi</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cửa Hàng</a></li>
                <li><a href="#" class="py-2 d-block">Giới thiệu</a></li>
                <li><a href="#" class="py-2 d-block">Liên Hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Hỗ trợ khách hàng</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Thông Tin vận chuyển</a></li>
	                <li><a href="#" class="py-2 d-block">Trả Lại &amp; Trao Đổi</a></li>
	                <li><a href="index.php" class="py-2 d-block">Điều khoản &amp; Chính sách</a></li>
	                <li><a href="index.php" class="py-2 d-block">Chinh sách bảo mật</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Bạn có câu hỏi?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">70 Nguyễn Huệ - Phường Vĩnh Ninh - TP Huế</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0367167344</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">xuantienleho@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
						  &copy;<script>document.write(new Date().getFullYear());</script> Bản quyền thuộc về <i class="icon-heart color-danger" aria-hidden="true"></i><a href="index.php" target="_blank">Trang Sức</a>
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
  </html>
    ';
    echo $s;
 }

 function _navbar() {
  if(isset($_GET['id_product']))addtoCartProduct($_GET['id_product']);
  if(isset($_GET['clear']))unset($_SESSION['cart']);
  $s = '
     <div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">0367167344</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">xuantienleho@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Giao hàng 3-5 ngày làm việc &amp; Trả lại miễn phí</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img src="images/Black Gold Elegant Jewelry Logo.png" alt="" style= width="150px"; height="150px;""></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Trang Chủ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="sanpham.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cửa Hàng</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">';
               $q = Database::query("SELECT * FROM `categories`");
               while($r = $q->fetch_array()) {
              	$s .= '<a class="dropdown-item" href="sanpham.php?id_category=' . $r['id'] . '">'.$r['name'].'</a>';
               }
              $s .= '</div>
            </li>
	          <li class="nav-item"><a href="baiviet.php" class="nav-link">Bài viết</a></li>
	          <li class="nav-item"><a href="lienhe.php" class="nav-link">Liên Hệ</a></li>
	          <li class="nav-item cta cta-colored"><a href="giohang.php" class="nav-link"><span class="icon-shopping-cart">';
                                    if(!isset($_SESSION['cart'])) $s.= '0';
                                    else $s.= count($_SESSION['cart']);
                                    $s.= '</span></a></li>';
             if(!isset($_SESSION['user'])) {
             $s .= '<li class="nav-item cta cta-colored"><a href="dangnhap.php" class="nav-link"><span class="fa fa-user"></span></a></li>';
             } else {
              $s .= '<li class="nav-item cta cta-colored"><i class="fa fa-user"></i><p>Chào '.splitName($_SESSION['user']['name']).'</p></li>
                   <a class="fa fa-sign-out" href="dangxuat.php"></a> 
              ';
             }
	        $s .= '</ul>
	      </div>
	    </div>
	  </nav>
  
  ';
  echo $s;
 }

 function _home() {
  $s = '
     <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	       <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">';
      $q = Database::query("SELECT * FROM `banner`");
      while($r = $q->fetch_array()) {
      $s .= '<div class="carousel-item active" data-bs-interval="3000">
      <img src="images/'.$r['image'].'" class="d-block w-100" alt="...">
    </div>';
      }
    $s .= '</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
     </div>
	    </div>
    </section>
  ';
  echo $s;
 }
 function _category() {
  $s = '
  <section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
								</div>
							</div>
							<div class="col-md-6">';
							 $q1 = Database::query("SELECT * FROM `products` ORDER BY RAND() LIMIT 2");
							 while($r1 = $q1->fetch_array()) {
								$s .= '<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end">
								  <img src="images/'.$r1['image'].'" alt="" width="150px" height="150px">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">'.$r1['name'].'</a></h2>
									</div>
								</div>';
							 }
							$s .= '</div>
						</div>
					</div>

					<div class="col-md-4">';
					  $q1 = Database::query("SELECT * FROM `products` ORDER BY RAND() LIMIT 2");
					  while($r1 = $q1->fetch_array()) {
						$s .= '<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end">
						   <img src="images/'.$r1['image'].'" alt="" width="150px" height="150px">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">'.$r1['name'].'</a></h2>
							</div>		
						</div>';
					  }
					$s .= '</div>
				</div>
			</div>
		</section>
  ';
  echo $s;
 }

 function _product() {
  $s = '
     <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Sản phẩm nổi bật</span>
            <h2 class="mb-4">Sản phẩm của chúng tôi</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">';
			  $q1 = Database::query("SELECT * FROM `products`");
			  while($r1 = $q1->fetch_array()) {
    			$s .= '<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/'.$r1['image'].'" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><p>'.$r1['name'].'</p></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">'.$r1['price'].'<sup>đ</sup></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="';
                            if(!isset($_SESSION['user']))
                            $s .= 'dangnhap.php';
                         else 
                            $s .= 'sanpham.php?id_product='.$r1['id'];
                            $s.='" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>';
			  }
    		$s .= '</div>
    	</div>
    </section>
  ';
  echo $s;
 }

 function _section() {
	$q = Database::query("SELECT * FROM `products` ORDER BY RAND() LIMIT 1");
	while($r = $q->fetch_array()) {
  $s = '
		<section class="ftco-section img" style="background-image: url(images/'.$r['image'].');"">
    	<div class="container">
		<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          	<span class="subheading">Giá tốt nhất cho bạn</span>
            <h2 class="mb-4">Deal of the day</h2>
            <h3><a href="';
                            if(!isset($_SESSION['user']))
                            $s .= 'dangnhap.php';
                         else 
                            $s .= 'sanpham.php?id_product='.$r['id'];
                            $s.='">'.$r['name'].'</a></h3>
            <span class="price">'.$r['price'].'<sup>đ</sup></span>
            <div id="timer" class="d-flex mt-5">
						  <div class="time" id="days"></div>
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
						</div>
          </div>
        </div>   		
    	</div>
    </section>
  ';
	}
  echo $s;
 }

 function _section2() {
  $s = '
    <hr>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Đăng ký nhận bản tin của chúng tôi</h2>
          	<span>Nhận thông tin cập nhật qua email về các cửa hàng mới nhất và ưu đãi đặc biệt của chúng tôi</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Nhập địa chỉ email của bạn">
                <input type="submit" value="Gửi" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  ';
  echo $s;
 }

 function login(){
  if (isset($_POST['emailphone']) && isset($_POST['password'])) {
      if (is_numeric($_POST['emailphone'])) {
          $x = 'phone';
      } else {
          $x = 'email';
      }
      
      $q = Database::query("SELECT * FROM users WHERE $x = '{$_POST['emailphone']}' AND password = '{$_POST['password']}'");
      if ($r = $q->fetch_array()) {
          if ($r['role'] == 'admin') {
              header("Location: admin.php");
          } else {
              $_SESSION['user'] = $r;
              if (isset($_POST['remember_me'])) {
                  setcookie('emailphone', $_POST['emailphone'], time() + (86400 * 30), "/"); 
                  setcookie('password', $_POST['password'], time() + (86400 * 30), "/"); 
              } else {
                  setcookie('emailphone', '', time() - 3600, "/");
                  setcookie('password', '', time() - 3600, "/");
              }
              
              header("Location:  index.php");
          }
      } else {
          $_SESSION['login_fail'] = 'Dữ liệu nhập không chính xác!!!';
          header("Location: dangnhap.php");
      }
  }

  $saved_emailphone = isset($_COOKIE['emailphone']) ? $_COOKIE['emailphone'] : '';
  $saved_password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';

  $s = '
  <section class="vh-100">
  <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">';
      $q = Database::query("SELECT * FROM `dangnhap`");
      while($r = $q->fetch_array()) {
      $s .= '<div class="col-md-9 col-lg-6 col-xl-5">
          <img src="assets/images/'.$r['image'].'"
          class="img-fluid" alt="Sample image">
      </div>';
      }
      $s .= '<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="" method="post">
          <h2 style="padding: 40px 0 25px 0">Đăng Nhập</h2>';
         if (isset($_SESSION['login_fail'])) {
             $s .= '<div style="color: red;">'.$_SESSION['login_fail'].'</div>';
             unset($_SESSION['login_fail']); 
         }
         
          $s .= '<!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" name="emailphone" class="form-control form-control-lg"
              placeholder="Nhập vào số điện thoại của bạn" value="' . htmlspecialchars($saved_emailphone) . '" />
          </div>
          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
              <input type="password" name="password" class="form-control form-control-lg"
              placeholder="Nhập vào mật khẩu" id="password" value="' . htmlspecialchars($saved_password) . '" />
              <button type="button" onclick="togglePassword()" class="btn btn-secondary btn-sm mt-2">Hiện/Ẩn mật khẩu</button>
          </div>
          <div class="d-flex justify-content-between align-items-center">
              <!-- Remember Me Checkbox -->
              <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" name="remember_me" value="1" id="form2Example3"' . (!empty($saved_emailphone) ? ' checked' : '') . ' />
                  <label class="form-check-label" for="form2Example3">
                      Ghi nhớ mật khẩu    
                  </label>
              </div>
              <a href="#!" class="text-body">Quên mật khẩu?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng Nhập</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản? <a href="dangky.php"
                  class="link-danger">Đăng ký</a></p>
          </div>
          </form>
      </div>
      </div>
  </div>
  
  </section>

  <script>
  function togglePassword() {
      var passwordField = document.getElementById("password");
      if (passwordField.type === "password") {
          passwordField.type = "text";
      } else {
          passwordField.type = "password";
      }
  }
  </script>
  ';

  echo $s;
}

function splitName($str){
      $rs = NULL;
      $word = mb_split(' ', $str);
      $n = count($word)-1;
      if ($n > 0) {$rs = $word[$n];}

      return $rs;
}
function register(){
  $errName = $errPhone = $errPass = $errRepass = '';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
      if (empty($_POST['name'])) {
          $errName = "Vui lòng nhập vào tên của bạn!";
      }
      if (empty($_POST['phone'])) {
          $errPhone = "Cần có 1 số điện thoại!";
      } else {
          if (!preg_match('/^\d{10}$/', $_POST['phone'])) {
              $errPhone = "Số điện thoại phải có đúng 10 chữ số!";
          } else {
              $phoneCheckQuery = "SELECT COUNT(*) FROM users WHERE phone='" . $_POST['phone'] . "'";
              $phoneCheckResult = Database::query($phoneCheckQuery);
              $phoneExists = $phoneCheckResult->fetch_array()[0];

              if ($phoneExists > 0) {
                  $errPhone = "Số điện thoại đã tồn tại!";
              }
          }
      }
      if (empty($_POST['pass'])) {
          $errPass = "Vui lòng nhập mật khẩu!";
      }
      if (empty($_POST['repass'])) {
          $errRepass = "Vui lòng xác nhận mật khẩu!";
      } else {
          if ($_POST['pass'] != $_POST['repass']) {
              $errRepass = "Mật khẩu không khớp!";
          }
      }
      if ($errName == '' && $errPhone == '' && $errPass == '' && $errRepass == '') {
          $insertQuery = "INSERT INTO users(name, phone, password, role) VALUES('".$_POST['name']."', '".$_POST['phone']."', '".$_POST['pass']."', '')";
          Database::query($insertQuery);
          $userQuery = "SELECT * FROM users WHERE phone='" . $_POST['phone'] . "' AND password='" . $_POST['pass'] . "'";
          $userResult = Database::query($userQuery);
          $_SESSION['user'] = $userResult->fetch_array();
          header("location: index.php");
      }
  }

  $s = '
      <section class="vh-80" style="background-color: #eee; border: none; border-radius: none;">
      <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-3">
                  <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng Ký</p>

                      <form class="mx-1 mx-md-4" action="" method="post">

                      <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fa fa-user"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example1c">Tên của bạn</label>
                          <input type="text" name="name" class="form-control" />
                          <span style="color: red;">'.$errName.'</span>
                          </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fa fa-phone"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example3c">Số điện thoại của bạn</label>
                          <input type="text" name="phone" class="form-control" />
                          <span style="color: red;">'.$errPhone.'</span>
                          </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fa fa-lock"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example4c">Mật Khẩu</label>
                          <input type="password" id="pass" name="pass" class="form-control" />
                          <span style="color: red;">'.$errPass.'</span>
                          <input type="checkbox" onclick="togglePassword(\'pass\')"> Hiển thị mật khẩu
                          </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fa fa-key"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example4cd">Xác nhận mật khẩu</label>
                          <input type="password" id="repass" name="repass" class="form-control" />
                          <span style="color: red;">'.$errRepass.'</span>
                          <input type="checkbox" onclick="togglePassword(\'repass\')"> Hiển thị mật khẩu
                          </div>
                      </div>

                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Đăng ký</button>
                      </div>

                      </form>

                  </div>';
                  $q = Database::query("SELECT * FROM `dangky`");
                  while($r = $q->fetch_array()) {
                  $s .= '<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                      <img src="assets/images/'.$r['image'].'"
                      class="img-fluid" alt="Sample image">
                  </div>';
                  }
                 $s .= '</div>
                  </div>
              </div>
          </div>
          </div>
      </div>
      </section>
      
      <script>
      function togglePassword(fieldId) {
          var field = document.getElementById(fieldId);
          if (field.type === "password") {
              field.type = "text";
          } else {
              field.type = "password";
          }
      }
      </script>
  ';
  echo $s;
}

function cart() {
  $total = 0.0;
  // Xử lý xóa từng sản phẩm
  if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
      $deleteIndex = (int)$_GET['delete'];
      if (isset($_SESSION['cart'][$deleteIndex])) {
          unset($_SESSION['cart'][$deleteIndex]);
          $_SESSION['cart'] = array_values($_SESSION['cart']); // Reset lại index
      }
  }
  // Xử lý cập nhật số lượng
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
      foreach ($_POST['quantities'] as $index => $quantity) {
          if (isset($_SESSION['cart'][$index]) && is_numeric($quantity) && $quantity > 0) {
              $_SESSION['cart'][$index]->quantity = (int)$quantity;
          }
      }
  }
  // Tính tổng tiền
  if (isset($_SESSION['cart'])) {
      $a = $_SESSION['cart'];
      foreach ($a as $item) {
          $item_total = $item->quantity * $item->price * 1000;
          $total += $item_total;
      }
  }
  // Hiển thị giỏ hàng
  $s = '
      <section class="shopping-cart spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <form method="post" action="giohang.php">
                      <div class="cart-table">
                          <table>
                              <thead>
                                  <tr>
                                      <th>Ảnh</th>
                                      <th class="p-name">Tên</th>
                                      <th>Giá</th>
                                      <th>Số lượng</th>
                                      <th>Tổng tiền</th>
                                      <th>Xoá</th>
                                  </tr>
                              </thead>
                              <tbody>';
                              if (isset($_SESSION['cart'])) {
                              $a = $_SESSION['cart'];
                              foreach ($a as $index => $item) {
                              $item_total = $item->quantity * $item->price * 1000;
                              $s .= '<tr>
                             <td class="cart-pic first-row"><img src="images/' . $item->image . '" alt="" style="width: 100px; height: 100px;"></td>
                              <td class="cart-title first-row">
                              <h5>' . $item->name . '</h5>
                              </td>
                              <td class="p-price first-row"><sup>$</sup>'.$item->price.'</td>
                              <td class="qua-col first-row">
                             <div class="quantity">
                              <input type="number" name="quantities[' . $index . ']" value="' . $item->quantity . '" min="1" style="width: 50px;">
                          </div>
                      </td>
                      <td class="total-price first-row">' . number_format($item_total, 0, '.', '.') . '<sup>đ</sup></td>
                    <td class="close-td first-row"><a href="giohang.php?delete=' . $index . '" class="fa fa-close" style="background: #F08080; 
                         width: 80px; 
                         height: 40px; 
                         display: flex; 
                        justify-content: center; 
                        align-items: center; 
                        border-radius: 10px; 
                       font-weight: bolder;
                       color: white; 
                       font-size: 16px; 
                       text-decoration: none;">
                       </a>
                      </td>
                  </tr>';
                  }
                 }
                   $s .= '</tbody>
                          </table>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">
                              <div class="cart-buttons">
                                  <a href="index.php" class="primary-btn continue-shop">Tiếp Tục Mua Sắm</a>
                                  <button type="submit" name="update_cart" class="primary-btn up-cart">Cập Nhật</button>
                                  <a href="giohang.php?clear=OK" class="primary-btn up-cart" style="text-decoration: none"><span class="fa fa-trash"></span></a>
                              </div>
                          </div>
                          <div class="col-lg-4 offset-lg-4">
                              <div class="proceed-checkout">
                                  <ul>
                                      <li class="cart-total">Tổng Tiền <span>' . number_format($total, 0, '.', '.') . '<sup>đ</sup></span></li>
                                  </ul>
                                  <a href="thanhtoan.php" class="proceed-btn" style="text-decoration: none;">Tiếp Tục Thanh Toán</a>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>';
  echo $s;
}

function addtoCartProduct($id_product) {
  $q = Database::query("SELECT * FROM `products` WHERE id =". $id_product);
  $r = $q->fetch_array();
  if(isset($_SESSION['cart'])) {
      $a = $_SESSION['cart'];
      for($i = 0; $i <count($a); $i++) 
          if($r['id']==$a[$i]->id)break;
      if($i<count($a))$a[$i]->quantity++;
      else  $a[count($a)] = new cart($r['id'], $r['name'], $r['image'], $r['price'], 1);
      
  }else {
      $a = array();
      $a[0] = new cart($r['id'], $r['name'], $r['image'], $r['price'], 1);
  }
  $_SESSION['cart'] = $a;
}

function _checkout($title) {
  $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
  $total = 0;
  foreach ($cart as $item) {
      $total += $item->quantity * $item->price * 1000;
  }
  $s = '
  <section class="checkout-section spad">
      <div class="container">
          <form action="process_order.php" class="checkout-form" method="POST">
              <div class="row">
                  <div class="col-lg-6">
                      <h4>'.$title.'</h4>
                        <div class="row">
                              <div class="col-lg-6">
                                  <div class="checkout__input">
                                      <p>Họ Tên <span>*</span></p>
                                      <input type="text" name="name" required>
                                  </div>
                              </div>
                          </div>
                          <div class="checkout__input">
                              <p>Địa Chỉ <span>*</span></p>
                              <input type="text" name="address" placeholder="Nhập địa chỉ của bạn" required>
                          </div>
                          <div class="checkout__input">
                              <p>Số điện thoại <span>*</span></p>
                              <input type="text" name="phone" required>
                          </div>
                          <div class="checkout__input">
                              <p>Ghi chú</p>
                              <input type="text" name="note" placeholder="Ghi chú về đơn hàng (nếu có)">
                          </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="place-order">
                          <h4>Đơn Hàng Của Bạn</h4>
                          <div class="order-total">
                              <ul class="order-table">
                              <li>Sản Phẩm <span>Tổng Tiền</span></li>
                              ';
                              foreach ($cart as $item) {
                                  $item_total = $item->quantity * $item->price * 1000;
                                  $s .= '
                                  <li class="fw-normal">'.$item->name.'x '.$item->quantity.' <span>'.number_format($item_total, 0, '.','.').'<sup>đ</sup></span></li>
                             ';
                              }
                              $s.= '
                              <li class="total-price">Tổng tiền <span>'.number_format($total, 0, '.','.').'<sup>đ</sup></span></li></ul>
                          
                              <div class="order-btn">
                                  <button type="submit" class="site-btn place-btn" style="background: #28a745">Đặt Đơn</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>  
  </section>
  ';
  echo $s;
}

function _shop() {
  $s = '';
  $id_category = isset($_GET['id_category']) ? intval($_GET['id_category']) : null;
  // Nhận danh mục
  $categories_query = Database::query("SELECT * FROM `categories`");
  if (!$categories_query) {
      echo "Lỗi khi tìm nạp danh mục.";
      return;
  }
  $s .= '
  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10 mb-5 text-center">
                  <ul class="product-category">
                      <li><a href="sanpham.php" class="active">Tất cả</a></li>';
  while ($category = $categories_query->fetch_array()) {
      $s .= '<li><a href="sanpham.php?id_category=' . $category['id'] . '">'.$category['name'].'</a></li>';
  }

  $s .= '</ul>
              </div>
          </div>
          <div class="row">';
  // tìm sản phẩm theo danh mục đã chọn
  $products_query = $id_category 
      ? Database::query("SELECT * FROM `products` WHERE status = true AND id_category = $id_category") 
      : Database::query("SELECT * FROM `products` WHERE status = true");
  if ($products_query) {
      while ($product = $products_query->fetch_array()) {
          $s .= '<div class="col-md-6 col-lg-3 ftco-animate">
              <div class="product">
                  <a href="#" class="img-prod"><img class="img-fluid" src="images/'.$product['image'].'" alt="Product Image">
                      <div class="overlay"></div>
                  </a>
                  <div class="text py-3 pb-4 px-3 text-center">
                      <h3><a href="#">'.$product['name'].'</a></h3>
                      <div class="d-flex">
                          <div class="pricing">
                              <p class="price"><span class="mr-2 price-dc">'.$product['price'].'<sup>đ</sup></span></p>
                          </div>
                      </div>
                      <div class="bottom-area d-flex px-3">
                          <div class="m-auto d-flex">
                              <a href="';
                            if(!isset($_SESSION['user']))
                            $s .= 'dangnhap.php';
                         else 
                            $s .= 'sanpham.php?id_product='.$product['id'];
                            $s.='" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                  <span><i class="ion-ios-cart"></i></span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>';
      }
  }

  $s .= '</div>
      </div>
  </section>
  <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
          <h2 style="font-size: 22px;" class="mb-0">Đăng ký nhận bản tin của chúng tôi</h2>
          <span>Nhận thông tin cập nhật qua email về các cửa hàng mới nhất và ưu đãi đặc biệt của chúng tôi</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form action="#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="text" class="form-control" placeholder="Nhập địa chỉ email của bạn">
              <input type="submit" value="Gửi" class="submit px-3">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>';

  echo $s;
}

function _contact() {
  $s = '
    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Địa Chỉ:</span> 70 Nguyễn Huệ - Phường Vĩnh Ninh - TP Huế</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>SĐT:</span> <a href="tel://1234567920">0367167344</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:xuantienleho@gmail.com">xuantienleho@gmail.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.3536849106467!2d107.58544287460766!3d16.457619228924464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a14771646be3%3A0x2fd0ad0d9227d5b0!2zNzAgTmd1eeG7hW4gSHXhu4csIFbEqW5oIE5pbmgsIEh14bq_LCBUaOG7q2EgVGhpw6puIEh14bq_LCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1734165895665!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="#" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Tên của bạn">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email của bạn">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Tin nhắn"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
  ';
  echo $s;
}

function _baiviet() {
  $s = '
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<div class="row">';
            $q = Database::query("SELECT * FROM `blog`");
            while($r = $q->fetch_array()) {
		          $s .= '<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.html" class="block-20" style="background-image: url(images/'.$r['image'].');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><span>'.$r['day'].'</span></div>
		                </div>
		                <h3 class="heading"><a href="detail.php?id_blog= '.$r['id'].'">'.$r['title'].'</a></h3>
		                <p>'.$r['pagaph'].'</p>
		                <p><a href="detail.php?id_blog= '.$r['id'].'" class="btn btn-primary py-2 px-3">Xem Ngay</a></p>
		              </div>
		            </div>
		          </div>';
            }
						$s .= '</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Danh Mục</h3>
              <ul class="categories">';
              $q1 = Database::query("SELECT * FROM `categories`");
              while($r1 = $q1->fetch_array()) {
                $s .= '<li><a href="sanpham.php?id_category=' . $r1['id'] . '">'.$r1['name'].'</a></li>';
              }
              $s .= '</ul>
            </div>

            <div class="sidebar-box ftco-animate">';
             $q3 = Database::query("SELECT * FROM `blog`");
             while($r3 = $q3->fetch_array()) {
              $s .= '<h3 class="heading">Bài viết gần đây</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/'.$r3['image'].');"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="#">'.$r3['title'].'</a></h3>
                  <div class="meta">
                    <div><p><span class="icon-calendar"></span>'.$r3['day'].'</p></div>
                  </div>
                </div>
              </div>';
             }
            $s .= '</div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Tìm kiếm theo từ khoá</h3>
              <div class="tagcloud">';
               $q2 = Database::query("SELECT * FROM `products` ORDER BY RAND() LIMIT 10");
               while($r2 = $q2->fetch_array()) {
                $s .= '<a href="#" class="tag-cloud-link">'.$r2['name'].'</a>';
               }
              $s .= '</div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

  ';
  echo $s;
}

function _detail() {
  $s = '
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">';
           $q4 = Database::query("SELECT * FROM `baiviet`");
           while($r4 = $q4->fetch_array()) {
						$s .= '<h2 class="mb-3">'.$r4['title'].'</h2>
            <img src="images/'.$r4['image'].'" alt="">
            <p>'.$r4['pagraph'].'</p>';
           }
          $s .= '</div> 
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form" method="post">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Tìm kiếm....">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Danh Mục</h3>
              <ul class="categories">';
               $q1 = Database::query("SELECT * FROM `categories`");
               while($r1 = $q1->fetch_array()) {
                $s .= '<li><a href="sanpham.php?id_category=' . $r1['id'] . '">'.$r1['name'].'</a></li>';
               }
              $s .= '</ul>
            </div>

            <div class="sidebar-box ftco-animate">';
            $q2 = Database::query("SELECT * FROM `blog`");
            while($r2 = $q2->fetch_array()) {
              $s .= '<h3 class="heading">Bài viết gần đây</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/'.$r2['image'].');"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="#">'.$r2['title'].'</a></h3>
                  <div class="meta">
                    <div><p><span class="icon-calendar"></span>'.$r2['day'].'</p></div>
                  </div>
                </div>
              </div>';
            }
            $s .= '</div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Tìm kiếm theo từ khoá</h3>
              <div class="tagcloud">';
                $q3 = Database::query("SELECT * FROM `products` ORDER BY RAND() LIMIT 10");
                while($r3 = $q3->fetch_array()) {
                $s .= '<a href="#" class="tag-cloud-link">'.$r3['name'].'</a>';
                }
              $s .= '</div>
            </div>
          </div>

        </div>
      </div>
    </section>
  
  ';
  echo $s;
}

?>