<?php
  //取得表單資料
  $video_id = $_GET["video_id"];

  //取得購物車資料
  $video_id_array = explode(",,", $_COOKIE["video_id_list"]);
  $title_array = explode(",,", $_COOKIE["title_list"]);
  $channel_title_array = explode(",,", $_COOKIE["channel_title_list"]);
  $category_array = explode(",,", $_COOKIE["category_list"]);
  $publish_time_array = explode(",,", $_COOKIE["publish_time_list"]);
  $trending_date_array = explode(",,", $_COOKIE["trending_date_list"]);
  $views_array = explode(",,", $_COOKIE["views_list"]);
  $likes_array = explode(",,", $_COOKIE["likes_list"]);
  $comment_count_array = explode(",,", $_COOKIE["comment_count_list"]);  	

  $key = array_search($video_id, $video_id_array);

  //若數量等於0，則將該產品從購物車中刪除
  unset($video_id_array[$key]);
  unset($title_array[$key]);
  unset($channel_title_array[$key]);
  unset($category_array[$key]);
  unset($publish_time_array[$key]);
  unset($trending_date_array[$key]);
  unset($views_array[$key]);
  unset($likes_array[$key]);	
  unset($comment_count_array[$key]);		


  //儲存購物車資料
  setcookie("video_id_list", implode(",,", $video_id_array));
  setcookie("title_list", implode(",,", $title_array));
  setcookie("channel_title_list", implode(",,", $channel_title_array));
  setcookie("category_list", implode(",,", $category_array));
  setcookie("publish_time_list", implode(",,", $publish_time_array));
  setcookie("trending_date_list", implode(",,", $trending_date_array));
  setcookie("views_list", implode(",,", $views_array));
  setcookie("likes_list", implode(",,", $likes_array));
  setcookie("comment_count_list", implode(",,", $comment_count_array));

  //導向 shopping_car.php 網頁	
  header("location:watching_later.php");
?>
