<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="img" multiple="multiple" />
<input type="text" name="content" value="" />
<input type="submit" name="upload" value="upload" />
</form>
</body>
</html>
<?php
if(isset($_POST['upload'])){
$image = $_FILES['img'];
$content = $_POST['content'];
$sql= "select * from image where content='$content'";
if($image['name'] == "" || $content == ""){
 echo 'Vui lòng chọn ãnh !';
} else {
move_uploaded_file($image['tmp_name'], $image["name"]);
$connect = mysql_connect("localhost", "root", "") or die ("khong the ket noi");
mysql_select_db("thongtin", $connect);
$sql = "Insert Into image(images, content) Values('".$image['name']."','$content')";
mysql_query($sql);
}
}

?>