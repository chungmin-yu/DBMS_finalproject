<?php
  //清除購物車資料
  setcookie("video_id_list", "");
  setcookie("title_list", "");
  setcookie("channel_title_list", "");
  setcookie("category_list", "");
  setcookie("publish_time_list", "");
  setcookie("trending_date_list", "");
  setcookie("views_list", "");
  setcookie("likes_list", "");
  setcookie("comment_count_list", "");
  //導向到shopping_car.php網頁
  header("location:watching_later.php");	
?>
