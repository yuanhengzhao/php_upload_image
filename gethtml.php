<?php 
class upload{
	function upload_html($conn_id, $ftp_path, $local_file){
		$uploaded = ftp_put($conn_id, $ftp_path, $local_file, FTP_ASCII);
		print (!$uploaded) ? ' Cannot upload' :  ' Upload content success.';
	}
}
	$host = 'ftp.qigital.com';
	$usr = 'realtor@qigital.com';
	$pwd = 'N$FQz#zB7@ov+@*m';
	$conn_id = ftp_connect($host, 21) or die ("Cannot connect to host");
	$local_file = 'D:\test\test1.html';
	$ftp_path = '/henry_test_folder/test1.html';
	ftp_login($conn_id, $usr, $pwd) or die("Cannot login");
	
	$upload = new upload;
	if (ftp_get($conn_id, $local_file, $ftp_path, FTP_ASCII)) {
    echo "Successfully written to $local_file.";
	} else {
    echo "There was a problem\n";
	}
	if(isset($_POST['submit'])){
		$htmledit = $_POST['htmledit'];
		file_put_contents($local_file, $htmledit);
		$upload->upload_html($conn_id, $ftp_path, $local_file);

		echo " You wrote ---->";
		echo $htmledit;
	}
	ftp_close($conn_id);
?>
<html>
	<form enctype="multipart/form-data" action="" method="post">
    <input name="htmledit" type="text"/>
    <input type="submit" name="submit" value="Upload" class="btn btn-primary"/><br/>
	</form>
</html>