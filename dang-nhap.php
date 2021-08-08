<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xem Phim HD Online </title>
<link rel="stylesheet" href="Untitled-2.css" /> 
</head>
<style type="text/css">
*{
margin:0px;
padding:0px;
}
body {
display:block;
background:#CCC;
text-decoration:none;
width:100%;
font-family:sans-serif;
margin:0px;
padding:0px;
}

#top {
width:100%;
height:40px;
background-color:#a70d15;
text-align:center;
line-height:40px;
z-index:100000;
top:0px;
}
#logo {
width:100%;
height:150px;
border-bottom:2px solid #900;
position:absolute;
background:#FFF;
overflow:auto;
}
img {
line-height:150px;
vertical-align:middle;
padding-left:20px;
}
.fixNav {
display:block;
font-family:Arial, Helvetica, sans-serif;
height:50px;
width:150px;
text-align:center;
font-weight:bold;
background:#a70d15;
margin:50px 0px 0px 202px;
border-radius:15px 15px 0px 0px;
box-shadow:3px 3px 3px #666;
}
.title-1 {
	font-weight:bold;
	text-align:center;
	line-height:50px;
	color:#FFF;
	font-size:18px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
</style>
<style>
	#menu li{
		color: #f1f1f1;
        display: inline-block;
        width: 150px;
        height: 50px;
        line-height: 50px;
        margin-left: -5px;
		font-size:18px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  	}
	#menu a {
		text-decoration:none;
		color:#FFF;
		display:block;
	}
	#menu a:hover {
  background: #F1F1F1;
  color:#a70d15;
  border-bottom:3px solid #FC0;
   -webkit-transition: background .55s ease;
  -moz-transition: background .55s ease;
  -ms-transition: background .55s ease;
  -o-transition: background .55s ease;
  transition: background .55s ease;
}
	
	   #menu ul {
	   background:#a70d15;
       list-style-type: none;
       text-align: center;
	   box-shadow:3px 3px 3px #666;
		}
		#menu {
			margin-top:152px;
		}
		.sub-menu {
  display: none;
  position: absolute;
  list-style-type:none;
  text-align:center;
  margin-left:0px;
  z-index:90000;
}

#menu li {
  position: relative;
}
#menu li:hover .sub-menu {
  display: block;
   -webkit-transition: background .55s ease;
  -moz-transition: background .55s ease;
  -ms-transition: background .55s ease;
  -o-transition: background .55s ease;
  transition: background .55s ease;
}

.sub-menu li {
  margin-left: 0 !important;
}
/*==Menu cấp 3==*/
.sub-menu > ul {
  display: none !important;
  list-style-type:none;
  text-align:center;
  padding:0px;
}
</style> 
<style type="text/css">
#main {
width:100%;
height:auto;
margin-bottom:100px;
overflow:auto;
}
#left {
width:15%;
height:700px;
float:left;
}

#info {
width:70%;
height:1290px;
background:#FFF;
float:left;
box-shadow:3px 3px 3px #666;

}

#right {
	width:15%;
	height:700px;
    float:left;
}

#footer {
	height:50px;
	clear:left;
	width:100%;
	background:#CCC;
	border-top:1px solid #999;
	text-align:center;
	position:inherit;
	bottom:0px;
}

</style>
<style>
#login {
float:right;
line-height:40px;
color:#FFF;
margin-right:20px;
}

#submit, submit-1 {
    border: 2px solid #FC3;
	background:#FC0;
}
#submit-1 {
    border: 2px solid #FC3;
	background:#FC0;}
#status {
display:inline-block;
line-height:150px;
float:right;
height:150px;
right:0px;
}
.fb-login-button {
float:right;
line-height:150px;
margin:5px 20px 0px 0px;
}
</style>

<style>
div {
display:block;
}

.right{
	left:0px;
	}
.list-fl {
margin:0px 0px 13px 0px;
font-family:Arial, Helvetica, sans-serif;
}
ul, p, div {
margin:0px 0px 0px 0px;
padding:0px;
list-style:disc;
color:#00C;
list-style-type:none;
}
a{
	text-decoration:none;
}
ul, menu, dir {
    display: block;
    list-style-type: disc;
}
li {
	display:list-item;
	    text-align: -webkit-match-parent;
		list-style-type:none;
	}
.right .list-fl .film {
margin:20px 15px 8px 0px;
}
b{
	padding:7px 7px 7px 7px;
	text-align:center;
	font-size:13px;
	height:32px;
}
.list-fl .film {
width:154px;
float:left;
position:relative;
}
.name {
display:inline-block;
padding:10px;
}
.film-right {
width:40%;
float:right;
}

.menu-film {
display:block;
width:40%;
margin-left:30%;
position:relative;
height:170px;
border:#a70d15;
background-color:#a70d15;
border-radius:0px 15px 15px;
font-size:14px;
color:#FFF;
font-weight:700;
line-height:2;
text-align:left;
z-index:100;
box-shadow:0px 3px 9px #333333;

}
span:hover{
color:#F00;
}
.page {
width:50px;
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
height:20px;
line-height:20px;
margin:0px;
padding:0px;
float:left;
}
a{text-decoration:none;
color:#000;}
.film{
padding:0px;
margin:0px;
white-space:nowrap;
text-overflow:ellipsic;
vertical-align:middle;
}
.film img{
width:100%; 
height:231px;
text-align:center;
line-height:231px;
vertical-align:middle;
}
.menu-film li{
	margin-left:-5px;
	position:relative;
	float:left;
	display:block;
	text-align:center;
}
label {
display:inline;
background:#a70d15;
color:white;
top:0px;
left:0px;
font-size:11px;
position:absolute;
width:100px;
height:20px;
line-height:20px;
border-radius:2px 2px 2px 2px;
margin:5px 0px 0px 25px;
padding-left:5px;

}

.dang-nhap {
display:block;
position:relative;
margin:0px 0px 0px 0px;
padding:5px;
text-align:left;
}
.name-form{
display:block;
margin:30px 0px 0px 30%;
padding:10px;
font-size:40px;
font-weight:bold;
text-align:center;
background-color:#a70d15;
color:#FFF;
position:relative;
width:100px;
height:30px;
z-index:1;
border-top-left-radius:15px;
border-top-right-radius:15px;
line-height:30px;
box-shadow:3px 0px 6px #333333;
}
.dn {
display:block;
width:200px;
height:50px;
line-height:50px;
text-align:center;
font-size:24px;
font-weight:bold;
border-radius:9px 9px 9px;
background-color:#FC0;
color:#C00;
border-color:#FC0;
padding:0px;
margin:10px 0px 0px 50px;
}
.tb{
margin-top:10px;
margin-left:10%;
}

</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=311184649307425";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>

</div>
<body>

<div id="top">
<form id="login" action="dang-ki.php" >
<input id="submit-1" type="submit" name="bnt-submit1" value="Đăng Ký"/>
<input id="submit" type="submit" name="btn_submit" value="Đăng Nhập" />
</form>


</div>
<div id="logo" class="in-logo"><span><a title="hdphim.com" href="home.php"><img src="logo1.jpg" height="150px" width="250px" /></a></span></div>
<div id="menu" class="in-menu">
<ul>
<li><a href="home.php">TRANG CHU</a></li>
<li><a href="">THE LOAI</a>
   <ul class="sub-menu">
       <li><a href="hanh-dong.php">PHIM HÀNH ĐỘNG</a></li>
       <li><a href="">PHIM TÌNH CÃM</a></li>
        <li><a href="">PHIM HOẠT HÌNH</a></li>
        <li><a href="">PHIM HÀI HƯỚC</a></li>
        <li><a href="">PHIM KINH DỊ</a></li>
  </ul>
</li>
<li><a href="">QUỐC GIA</a></li>
<li><a href="">PHIM MỚI</a></li>
<li><a href="">PHIM LE</a></li>
<li><a href="">PHIM BỘ</a></li>
<li><a href="">PHIM CHIEU RẠP</a></li>
</ul>
</div>
<nav class="fixNav">
<span class="title-1">PHIM NỖI BẬT
</span></nav>
<div id="main" class="container">

<div id="left"></div>

<div id="info" class="right">
<div class="name-form"><b>ĐĂNG NHẬP</b></div>
<div class="menu-film">

<form class="dang-nhap" action="dang-nhap.php" method="POST">

        <table class="tb">
            <tr>
				<td>TÀI KHOÃN :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>MẬT KHẪU :</td>
				<td><input type="password" id="password" name="password"></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input class="dn" type="submit" name="btn_submit" value="ĐĂNG NHẬP"></td>
			</tr>
 
		</table>
 
	</form>
</div>

</div>

<div id="right"></div>

</div>
<footer id="footer">
</footer>
</body>
<?php
	//Gọi file connection.php ở bài trước
	require_once("connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "Tài Khoãn hoặc Mật khẫu bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "Tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: home.php');
			}
		}
	}
?>
</html>
