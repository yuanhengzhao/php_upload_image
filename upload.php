
<?php 
class upload{
	function upload_img($conn_id, $ftp_path, $local_file){
		$uploaded = ftp_put($conn_id, $ftp_path, $local_file, FTP_BINARY);
		print (!$uploaded) ? ' Cannot upload to ' :  'Image upload complete to ';
	}
}
	$host = 'ftp.qigital.com';
	$usr = 'realtor@qigital.com';
	$pwd = 'N$FQz#zB7@ov+@*m';
	$servername = "localhost";
	$username = "root";
	$password = "95847362jJ@246?";
	$database = 'upload_img';
	mysql_connect($servername,$username,$password);
	mysql_select_db($database);
	if(isset($_FILES['image1'])){
		   if(isset($_FILES['image1'])){
      $errors= array();
      $file_name = $_FILES['image1']['name'];
      $file_size =$_FILES['image1']['size'];
      $file_tmp =$_FILES['image1']['tmp_name'];
      $file_type=$_FILES['image1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));

      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
        $file_name = $_FILES['image1']['name'];
		$description = $_POST['desc1'];
		$link_name = 'www.google.ca';
		$sql_query = "INSERT INTO upload_img_info(image_name, description, link) VALUES('$file_name','$description','$link_name')";
		mysql_query($sql_query);
		
		$dir = realpath(dirname($_SERVER['PHP_SELF']));
		$local_file = $dir.DIRECTORY_SEPARATOR.$file_name;
		//$local_file = join(DIRECTORY_SEPARATOR, array($dir, $file_name));
		echo $local_file;
		echo "--------------";
		$ftp_path = '/henry_test_folder/test1.jpg';
		$upload = new upload;
		$conn_id = ftp_connect($host, 21) or die ("Cannot connect to host");
		ftp_login($conn_id, $usr, $pwd) or die("Cannot login");
		$upload->upload_img($conn_id, $ftp_path, $local_file);
		print $ftp_path;
		ftp_close($conn_id);
      }else{
         print_r($errors);
		}
	}
	}
	if(isset($_FILES['image2'])){
		   if(isset($_FILES['image2'])){
      $errors= array();
      $file_name = $_FILES['image2']['name'];
      $file_size =$_FILES['image2']['size'];
      $file_tmp =$_FILES['image2']['tmp_name'];
      $file_type=$_FILES['image2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image2']['name'])));

      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
        $file_name = $_FILES['image2']['name'];
		$description = $_POST['desc2'];
		$link_name = 'www.google.ca';
		$sql_query = "INSERT INTO upload_img_info(image_name, description, link) VALUES('$file_name','$description','$link_name')";
		mysql_query($sql_query);
		$dir = realpath(dirname($_SERVER['PHP_SELF']));
		$local_file = $dir.DIRECTORY_SEPARATOR.$file_name;
		//$local_file = join(DIRECTORY_SEPARATOR, array($dir, $file_name));
		echo $local_file;
		echo "--------------";
		$ftp_path = '/henry_test_folder/test2.jpg';
		$upload = new upload;
		$conn_id = ftp_connect($host, 21) or die ("Cannot connect to host");
		ftp_login($conn_id, $usr, $pwd) or die("Cannot login");
		$upload->upload_img($conn_id, $ftp_path, $local_file);
		print $ftp_path;
		ftp_close($conn_id);
      }else{
         print_r($errors);
		}
	}
	}
	if(isset($_FILES['image3'])){
		   if(isset($_FILES['image3'])){
      $errors= array();
      $file_name = $_FILES['image3']['name'];
      $file_size =$_FILES['image3']['size'];
      $file_tmp =$_FILES['image3']['tmp_name'];
      $file_type=$_FILES['image3']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image3']['name'])));

      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
        $file_name = $_FILES['image3']['name'];
		$description = $_POST['desc3'];
		$link_name = 'www.google.ca';
		$sql_query = "INSERT INTO upload_img_info(image_name, description, link) VALUES('$file_name','$description','$link_name')";
		mysql_query($sql_query);
		$dir = realpath(dirname($_SERVER['PHP_SELF']));
		$local_file = $dir.DIRECTORY_SEPARATOR.$file_name;
		//$local_file = join(DIRECTORY_SEPARATOR, array($dir, $file_name));
		echo $local_file;
		echo "--------------";
		$ftp_path = '/henry_test_folder/test3.jpg';
		$upload = new upload;
		$conn_id = ftp_connect($host, 21) or die ("Cannot connect to host");
		ftp_login($conn_id, $usr, $pwd) or die("Cannot login");
		$upload->upload_img($conn_id, $ftp_path, $local_file);
		print $ftp_path;
		ftp_close($conn_id);
      }else{
         print_r($errors);
		}
	}
	}
?>
<script>
     function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#test1')
                        .attr('src', e.target.result)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#test2')
                        .attr('src', e.target.result)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#test3')
                        .attr('src', e.target.result)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<html>
	<head>
		<script class="test" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<meta charset=utf-8 />
	</head>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image1" onchange = "readURL1(this);"/>
			<img id="test1" src="#" alt="your image" />
		 <input type="text" name="desc1" placeholder="description" required />
		 <input type="submit"/>
      </form>
	   <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image2" onchange = "readURL2(this);"/>
			<img id="test2" src="#" alt="your image" />
		 <input type="text" name="desc2" placeholder="description" required />
		 <input type="submit"/>
		  </form>
		  <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image3" onchange = "readURL3(this);"/>
			<img id="test3" src="#" alt="your image" />
		 <input type="text" name="desc3" placeholder="description" required />
		 <input type="submit"/>
     
      </form>
      
   </body>
</html>