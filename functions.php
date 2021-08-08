<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
 
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
while($condition);
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
 
function posts_column_views($defaults){
    $defaults['post_views'] = __( 'Views' , '' );
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if( $column_name === 'post_views' ) {
        echo getPostViews( get_the_ID() );
    }
}
;
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
 
function posts_column_views($defaults){
    $defaults['post_views'] = __( 'Views' , '' );
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if( $column_name === 'post_views' ) {
        echo getPostViews( get_the_ID() );
    }
}
?>
</body>
</html>