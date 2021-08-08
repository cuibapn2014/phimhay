<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	if (have_posts()){
		echo '<ul class="ks-loop">';
		while(have_posts()){
			the_post();
			
			// Toàn bộ phương thức của template_tags để in ra các giá trị của bài viết
			// the_title(): Lấy ra tên tiêu đề bài viết
			// the_ID(): Lấy ra ID của bài viết
			// the_permalink(): Lấy ra đường đẫn tới bài viết
			// the_author: Lấy ra tên tác giả của bài viết
			// the_tags: Lấy ra các tags
			// the_category: Lấy ra tên danh mục bài viết
			// the_excerpt: Lấy ra mô tả nội dung bài viết
?>
		<li>
			<h2><?php the_title(); ?></h2>
			<div>ID: <?php the_ID(); ?> - Time: <?php the_time(); ?></div>
			<div>Author: <?php the_author(); ?></div>
			<div><?php  the_tags();?></div>
			<div>Category: <?php the_category(); ?></div>
			<div>Excerpt: <?php the_excerpt();?></div>
		</li>
<?php
		}
		echo '</ul>';
	} else {
		
	}
?>
</body>
</html>