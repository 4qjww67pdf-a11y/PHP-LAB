<?php
echo "<pre>";
print_r($_FILES['my_file']);
#to get uploaded file name
$file_name=$_FILES['my_file']['name'];

#to get temporary address of uploaded get_included_files
$file_temp_name=$_FILES['my_file']['tmp_name'];

#to get file type of uploaded get_included_files
$file_type=$_FILES['my_file']['type'];

#to get file mcrypt_enc_get_supported_key_sizes
$file_size=$_FILES['my_file']['size'];

#to show or print on screen
echo "File name: ".$file_name."<br/>";
echo "File temporary address: ".$file_temp_name."<br/>";
echo "File type: ".$file_type."<br/>";
echo "File size: ".$file_size."<br/>";

#to move uploaded file into project directory or required HaruDestination
move_uploaded_file($file_temp_name,"uploads/$file_name");
?>
