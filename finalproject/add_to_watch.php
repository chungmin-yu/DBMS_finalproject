<?php
  //取得表單資料
  $video_id = $_GET["video_id"];
  $title = $_GET["title"];
  $channel_title = $_GET["channel_title"];
  $category = $_GET["category"];
  $publish_time = $_GET["publish_time"];
  $trending_date = $_GET["trending_date"];
  $views = $_GET["views"];
  $likes = $_GET["likes"];
  $comment_count = $_GET["comment_count"];	


  //若購物車沒有任何項目，則直接加入產品資料
  if (empty($_COOKIE["video_id_list"]))
  {
    setcookie("video_id_list", $video_id);
    setcookie("title_list", $title);
    setcookie("channel_title_list", $channel_title);
    setcookie("category_list", $category);
    setcookie("publish_time_list", $publish_time);
    setcookie("trending_date_list", $trending_date);			
    setcookie("views_list", $views);
    setcookie("likes_list", $likes);
    setcookie("comment_count_list", $comment_count);    
  }
  else
  {
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
		
    //判斷選擇的物品有在購物車中
    if (!in_array($title, $title_array))
    {	
      //如果選擇的物品沒有在購物車中，則將物品資料加入購物車	
      $video_id_array[] = $video_id;			
      $title_array[] = $title;
      $channel_title_array[] = $channel_title;
      $category_array[] = $catagory_id;
      $publish_time_array[] = $publish_time;
      $trenging_time_array[] = $trending_date;
      $views_array[] = $views;
      $likes_array[] = $likes;			
      $comment_count_array[] = $comment_count;												
    }

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
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    </head>	
  <body bgcolor="lightyellow">
    <p align="center"><img src="fig1.jpg"></p>
    <p align="center">The video is put in watching later list successfully！</p>
    <p align="center"><a href="usvideo.php">continue to USA videoes list</a></p>
    <p align="center"><a href="gbvideo.php">continue to Great Britain videoes list</a></p>
    <p align="center"><a href="cavideo.php">continue to Canada videoes list</a></p>
    <p align="center"><a href="jpvideo.php">continue to Japan videoes list</a></p>                                                                              
  </body>
</html>
