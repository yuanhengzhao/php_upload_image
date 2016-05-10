<?php
if(isset($_FILES['image1'])){
	$host = 'ftp.qigital.com';
	$usr = 'realtor@qigital.com';
	$pwd = 'N$FQz#zB7@ov+@*m';
	$local_file = 'D:\test\test1.jpg';
	$ftp_path = '/henry_test_folder/test1.jpg';
	$conn_id = ftp_connect($host, 21) or die ("Cannot connect to host");
	ftp_login($conn_id, $usr, $pwd) or die("Cannot login");
	$upload = ftp_put($conn_id, $ftp_path, $local_file, FTP_ASCII);
	print $ftp_path;
	ftp_close($conn_id);
}
?>
<html>
  <form action="" method="POST" enctype="multipart/form-data">
	 <input type="file" name="image1" onchange = "readURL1(this);"/>
		<img id="test1" src="#" alt="your image" />
	 <input type="text" name="desc1" />
	 <input type="submit"/>
  </form>
</html>