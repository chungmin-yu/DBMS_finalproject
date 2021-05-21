<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>	
  <body bgcolor="lightyellow">
    <p align='center'><a href="authen.php">Back</a></p>
        <?php
          require_once("dbtools.inc.php");
		  
          //建立資料連接
          $link = create_connection();

	  $func = $_POST["function"];
	  $table = $_POST["tables"];
          $comm = $_POST["command"];
          $sql = $func . $table .$comm;
          //篩選出所有產品資料
          echo "<p>The command You entered is '"; 
          echo $sql;
          echo "'<p><br>";
          //$sql = "SELECT * FROM product_list";
          //echo $sql;
          $result = execute_sql($link, "PROJECT", $sql);
						
          //計算總記錄數
          //echo $result;
          //$total_records = mysqli_num_rows($result);
          $total_records = mysqli_affected_rows($link);
	  if ($result<=0){
	  	echo "=>The command you enter is wrong!<br>";
	  	
	  }else{
	  	echo "=>Successful records: " . $total_records . " records";
	  }
									
          //釋放資源及關閉資料連接
          mysqli_free_result($result);
          mysqli_close($link);

        ?>
    </table>
  </body>                                                                                 
</html>
