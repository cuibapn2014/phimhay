<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" id="form_search">
    <table>
        <tr>
            <td>
                <input type="text" name="keyword" id="key" style="width:400px" placeholder="Tìm kiếm tỉnh thành Việt Nam..." />
            </td>
        </tr>
        <tr>
            <td align="center">
                 <button id="button_search" name="btnsearch"type="submit">Tìm kiếm</button>
            </td>
        </tr>
    </table>
</form>
<p><?php

include 'thunghi-1.php';
echo sw_human_time_diff();

?></p>
</body>
</html>
<?php
mysql_connect("localhost", "root", "") or die("khong rãnh");
mysql_select_db("thongtin");

if(isset($_POST['btnsearch'])){
	$keyword = $_POST['keyword'];
	$sql = mysql_query("Select * From image where content Like '%$keyword%'");
	$num_row = mysql_num_rows($sql);
	if($num_row==0){
		?>
        Khong tim thay voi <?php echo $keyword; ?>
        <?php
        } else {
			?>
			Ket qua tìm được <?php echo "với " .$keyword. " là " .$num_row; ?>
            <ul>
            <?php
			while($row=mysql_fetch_array($sql)){
				?>
                <li><?php echo $row['content'];
				          echo "<img src='".$row['images']."' width='154px' height='240px'/>"; 
						  ?></li>
                <?php
			}
			echo "</ul>";
		}
}
?>
     

