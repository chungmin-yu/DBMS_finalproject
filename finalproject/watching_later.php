<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trending YouTube Videoes</title>
  </head>	
  <body bgcolor="LightYellow">
    <p align="center"><img src='fig1.jpg'></p>
    <?php
    echo "<p align='center'>Hello, " . $_COOKIE["name"] . ".</p>";
    ?>
    <table border="0" align="center" width="1400">
      <tr bgcolor="#ACACFF" height="30" align="center">
        <td>video id</td>
        <td>title</td>
        <td>channel title</td>
        <td>category</td>
        <td>publish time</td>
        <td>trending date</td>      
        <td>views</td>
        <td>likes</td>     
        <td>comment count</td> 
        <td>options</td> 	
      </tr>				
        <?php
          //若購物車是空的，就顯示 "目前購物車內沒有任何產品及數量" 訊息
          if (empty($_COOKIE["video_id_list"]))
          {
            echo "<tr align='center'>";
            echo "<td colspan='10'>Watching Later List is empty！</td>";	
            echo "</tr>";
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
					
            //顯示購物車內容		
            for ($i = 0; $i < count($title_array); $i++)
            {
              //顯示各欄位資料
              echo "<form method='post' action='change.php?video_id=" . $video_id_array[$i] . "'>";						
              echo "<tr bgcolor='#EDEAB1'>";
              echo "<td align='center'>" . $video_id_array[$i] . "</td>";
              echo "<td align='center'>" . $title_array[$i] . "</td>";		
              echo "<td align='center'>" . $channel_title_array[$i] . "</td>";			
              echo "<td align='center'>" . $category_array[$i] . "</td>";
              echo "<td align='center'>" . $publish_time_array[$i] . "</td>";
              echo "<td align='center'>" . $trending_date_array[$i] . "</td>";
              echo "<td align='center'>" . $views_array[$i] . "</td>";
              echo "<td align='center'>" . $likes_array[$i] . "</td>";
              echo "<td align='center'>" . $comment_count_array[$i] . "</td>";
              echo "<td align='center'><input type='submit' value='cancel'></td>";					
              echo "</tr>";
              echo "</form>";						
            }
					
            echo "<tr align='center'>";
            echo "<td colspan='10'>" . "<br><input type='button' value='Empty All'
              onClick=\"javascript:window.open('delete_order.php','_self')\">";
            echo "</td>";	
            echo "</tr>";	
          }
      ?>
    </table>
  </body>                                                                                 
</html>
