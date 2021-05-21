
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body bgcolor="lightyellow">
  <?php
    header("Content-type: text/html; charset=utf-8");
    /*if (!isset($_SERVER['PHP_AUTH_USER']))
    {
      header('WWW-Authenticate: Basic realm="DBProject"');
      echo "Sorry！You don't enter password！";
      exit();
    }
    else
    {*/
      
      
      if ($_SERVER['PHP_AUTH_USER'] != 'root' && $_SERVER['PHP_AUTH_PW'] != 'dbms2021'){
        header('WWW-Authenticate: Basic realm="DBProject"');
        echo "Hi {$_SERVER['PHP_AUTH_USER']}！<br>";
        echo "The password you entered is {$_SERVER['PHP_AUTH_PW']}！<br>";
        echo "Sorry! You don't have right to insert or update or delete!";
        exit();
      }else{
        echo "Hi {$_SERVER['PHP_AUTH_USER']}！<br>";
        echo "The passowrd you entered is {$_SERVER['PHP_AUTH_PW']}！<br>";
        echo "You can insert or update or delete now!<br>"; 
      }
     
    //}
  ?>
    <form method="post" action="authen2.php">
      <br>
      <hr>
      <br>
      <input type="radio" name="function" value="INSERT INTO " required> INSERT <br>
      <input type="radio" name="function" value="UPDATE " required> UPDATE <br>
      <input type="radio" name="function" value="DELETE FROM " required> DELETE <br>
      <br>Tables:
      <select name="tables">
        <option value="UScategory ">UScategory</option>
        <option value="GBcategory ">GBcategory</option>
        <option value="CAcategory ">CAcategory</option>
        <option value="JPcategory ">JPcategory</option>
        <option value="USvideos ">USvideos</option>
        <option value="GBvideos ">GBvideos</option>
        <option value="CAvideos ">CAvideos</option>
        <option value="JPvideos ">JPvideos</option>
      </select><br>
      <br>Command:<input type="text" name="command" size="150" required><br>
      <font color="#8E8E8E">For Example of XXcategory :</font><br>
      <font color="#8E8E8E">such as INSERT -> VALUES (100, 'xxxx')</font><br>
      <font color="#8E8E8E">such as UPDATE -> SET category = 'yyyy' WHERE category_id = 100</font><br>
      <font color="#8E8E8E">such as DELETE -> WHERE category_id=100</font><br>
      <br>
      <input type="submit" value="submit">
      <input type="reset" value="reset">
    </form>
    <br>
    <table border="0" width="400" cellspacing="2"> 
      <tr bgcolor="#BABA76" height="30" align='center'>
        <td colspan='2'>TABLES INFORMATION</td> 
      </tr>
      <tr bgcolor="#BABA76" height="30" align="center">
      	<td>TABLE XXcategory</td>
        <td>TABLE XXvideos</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td>category_id</td>
        <td>video_id</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td>category</td>
        <td>trending_date</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>title</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>channel_title</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>category_id</td>
      <tr>      
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>publish_time</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>tags</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>views</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>likes</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>dislikes</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>comment_count</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>thumbnail_link</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>comments_disabled</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>rating_disabled</td>
      <tr>
      <tr bgcolor="#EDEAB1" height="30" align="center">
      	<td></td>
        <td>video_error_or_removed</td>
      <tr>
    </table>
  </body>
</html>
