<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Canada Videoes</title>
  </head>
  <body bgcolor="LightYellow">
    <br>
    <form method="post" action="cavideo3.php">
    Use title search for Canada videoes<br>
    title:<input type="text" name="title_name" size="100" required><br>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
    </form>
    <br>
    <hr>
    <br>
    <form method="post" action="cavideo2.php">
      Another search for Canada videoes<br>
      category id:<input type="text" name="category_id" size="40" required><br>
      views:
      <select name="views">
        <option value="0">0-5000000</option>
        <option value="5000000">5000000-10000000</option>
        <option value="10000000">10000000-15000000</option>
        <option value="15000000">15000000-20000000</option>
        <option value="20000000">15000000-20000000</option>
        <option value="25000000">25000000-30000000</option>
      </select><br>
      likes:
       <select name="likes">
        <option value="0">0-400000</option>
        <option value="400000">400000-800000</option>
        <option value="800000">800000-1200000</option>
        <option value="1200000">1200000-1600000</option>
        <option value="1600000">1600000-2000000</option>
      </select><br>
      comment count:
       <select name="comment_count">
        <option value="0">0-100000</option>
        <option value="100000">100000-200000</option>
        <option value="200000">200000-300000</option>
        <option value="300000">300000-400000</option>
        <option value="400000">400000-500000</option>
      </select><br>
      publish time:&nbsp After
      <input name="publish_time" type="date"><br>
      <input type="submit" value="submit">
      <input type="reset" value="reset">
    </form>
    <br>
    <table border="0" width="400" cellspacing="2"> 
      <tr bgcolor="#BABA76" height="30" align="center">
      	<td>category_id</td>
        <td>category</td>
    </tr>
    <?php
          require_once("dbtools.inc.php");
		  
          //建立資料連接
          $link = create_connection();
          $sql= "SELECT * FROM CAcategory";
          $result = execute_sql($link, "PROJECT", $sql);
						
          //計算總記錄數
          $total_records = mysqli_num_rows($result);
          for ($i = 0; $i < $total_records; $i++)
          {
            //取得產品資料
            $row = mysqli_fetch_assoc($result);
									
            //顯示產品各欄位的資料
            echo "<tr align='center' bgcolor='#EDEAB1'>";
            echo "<td>" . $row["category_id"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "</tr>";
          }
          //釋放資源及關閉資料連接
          mysqli_free_result($result);
          
          mysqli_close($link);
        ?>
    </table>
  </body>
</html>
