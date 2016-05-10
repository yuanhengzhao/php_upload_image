<?php
$servername = "localhost";
$username = "root";
$password = "95847362jJ@246?";
$database = 'upload_img';
mysql_connect($servername,$username,$password);
mysql_select_db($database);
if(isset($_POST['btn-save']))
{
 $description = $_POST['description'];
 $sql_query = "INSERT INTO upload_img_info(description) VALUES('$description')";
 mysql_query($sql_query);
}
?>
<html>
<body>
    <form method="post">

    <td><input type="text" name="description" placeholder="description" required /></td>

    <td><button type="submit" name="btn-save">submit</button></td>

    </form>
</body>