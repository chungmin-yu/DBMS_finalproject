<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Great Britain Videoes</title>
  </head>	
  <body bgcolor="lightyellow">
    <p align='center'><a href="cavideo.php">Back</a></p>
    <table border="0" align="center" width="1400" cellspacing="2"> 
      <tr bgcolor="#BABA76" height="30" align="center">
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
          require_once("dbtools.inc.php");
		  
          //建立資料連接
          $link = create_connection();
		      
          $title = $_POST["title_name"];
          		
          //篩選出所有產品資料
          //$sql = "SELECT video_id, title, channel_title, category_id, publish_time, trending_date, views, likes, comment_count FROM CAvideos";
          //$sql = "SELECT video_id, title, channel_title, category_id, publish_time, trending_date, views, likes, comment_count FROM CAvideos WHERE category_id=" . $category . " AND views>=" . $view1 . " AND views<=" . $view2 ." AND likes>=" . $like1 . " AND likes<=" . $like2 . " AND comment_count>=" . $comment1 . " AND comment_count<=" . $comment2;
          $sql = "SELECT v.video_id, v.title, v.channel_title, c.category, v.publish_time, v.trending_date, v.views, v.likes, v.comment_count FROM GBvideos v, GBcategory c WHERE v.category_id=c.category_id AND v.title LIKE'" . $title . "' ORDER BY v.publish_time ASC";
                    
          //echo $sql;
          //echo "<br>";
          $result = execute_sql($link, "PROJECT", $sql);
						
          //計算總記錄數
          $total_records = mysqli_num_rows($result);
          //echo $total_records;
	  if ($total_records == 0)
          {
	      echo "<tr align='center'>";
	      echo "<td colspan='10'>The searching is empty！</td>"; 
	      echo "</tr>";
          }				
          //列出所有產品資料
          for ($i = 0; $i < $total_records; $i++)
          {
            //取得產品資料
            $row = mysqli_fetch_assoc($result);
									
            //顯示產品各欄位的資料
            echo "<form method='post' action='add_to_watch.php?video_id=" . $row["video_id"] ."&title=" . urlencode($row["title"]) . "&channel_title=" . urlencode($row["channel_title"]) . "&category=" . $row["category"] . "&publish_time=". $row["publish_time"] . "&trending_date=" . $row["trending_date"] . "&views=" . $row["views"] . "&likes=" . $row["likes"] . "&comment_count=" . $row["comment_count"] . "'>";
            echo "<tr align='center' bgcolor='#EDEAB1'>";
            echo "<td>" . $row["video_id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["channel_title"] . "</td>";			
            echo "<td>" . $row["category"] . "</td>";
            echo "<td>" . $row["publish_time"] . "</td>";
            echo "<td>" . $row["trending_date"] . "</td>";
            echo "<td>" . $row["views"] . "</td>";
            echo "<td>" . $row["likes"] . "</td>";
            echo "<td>" . $row["comment_count"] . "</td>";
            echo "<td><input type='submit' value='watching later'></td>";
            echo "</tr>";
            echo "</form>";
          }
									
          //釋放資源及關閉資料連接
          mysqli_free_result($result);
          
          mysqli_close($link);
        ?>
    </table>
  </body>                                                                                 
</html>
